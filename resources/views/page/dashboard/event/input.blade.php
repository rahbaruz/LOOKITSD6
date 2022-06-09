@extends('theme.dashboard')

@section('content')
    <div class="container mt-3">
        <div class="d-flex justify-content-between header-title">
            <div>
                <h2 class="fw-700">Please enter your</h2>
                <h2 class="text-primary fw-700">Event Information ...</h2>
            </div>

            <div class="card p-2 w-4 h-4 d-flex align-items-center justify-content-center">
                <svg width="60" viewBox="0 0 63 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5312 12.5C18.5318 10.1349 19.2284 7.81853 20.5402 5.81983C21.852 3.82112 23.7252 2.22213 25.9423 1.20859C28.1593 0.195036 30.6291 -0.191484 33.065 0.0939169C35.5008 0.379318 37.8027 1.32493 39.7032 2.82092C41.6037 4.31691 43.0249 6.30189 43.8017 8.54532C44.5785 10.7888 44.6791 13.1986 44.0917 15.4949C43.5043 17.7912 42.2531 19.8798 40.4833 21.518C38.7136 23.1563 36.4979 24.277 34.0938 24.75V30H45.1639C49.0753 30 52.25 33.06 52.25 36.835V45.25C55.3989 45.8696 58.197 47.594 60.1018 50.089C62.0066 52.584 62.8824 55.6718 62.5593 58.7538C62.2363 61.8358 60.7375 64.6924 58.3535 66.7699C55.9695 68.8473 52.8701 69.9975 49.6563 69.9975C46.4424 69.9975 43.343 68.8473 40.959 66.7699C38.575 64.6924 37.0762 61.8358 36.7532 58.7538C36.4302 55.6718 37.3059 52.584 39.2107 50.089C41.1155 47.594 43.9136 45.8696 47.0625 45.25V36.835C47.0625 36.3492 46.8626 35.8832 46.5067 35.5392C46.1508 35.1953 45.6679 35.0013 45.1639 35H17.8413C17.5913 35 17.3437 35.0475 17.1128 35.1397C16.8818 35.2319 16.6719 35.3671 16.4951 35.5375C16.3183 35.7079 16.1781 35.9102 16.0824 36.1328C15.9867 36.3554 15.9375 36.594 15.9375 36.835V45.25C19.0864 45.8696 21.8845 47.594 23.7893 50.089C25.6941 52.584 26.5699 55.6718 26.2468 58.7538C25.9238 61.8358 24.425 64.6924 22.041 66.7699C19.657 68.8473 16.5576 69.9975 13.3438 69.9975C10.1299 69.9975 7.03052 68.8473 4.64651 66.7699C2.2625 64.6924 0.763692 61.8358 0.44067 58.7538C0.117649 55.6718 0.993424 52.584 2.89821 50.089C4.80299 47.594 7.60108 45.8696 10.75 45.25V36.835C10.75 33.06 13.9248 30 17.8413 30H28.9063V24.75C25.977 24.1737 23.3442 22.6396 21.4536 20.4073C19.563 18.175 18.5306 15.3816 18.5312 12.5Z" fill="#2C249A"/>
                </svg>
            </div>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        <form action="{{route('event.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex gap-2 mt-4 header-title flex-column-reverse-md">
                <div>
                    <div class="border rounded h-10 w-17 image-event-container overflow-hidden d-flex align-items-center justify-content-center">
                        <img src="" alt="image event" id="event-image" class="max-w-100 h-100 object-fit-cover d-none">
                        <span class="text-mutted text-secondary" id="event-text-temp">Image Event</span>
                    </div>
                    @error('image')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="mt-3">
                        <input type="file" class="d-none" name="image" id="input-event-image">
                        <label for="input-event-image" role="button" class="border hover-opacity-btn-primary gap-1 rounded border-primary h-2 w-100 d-flex align-items-center justify-content-center">
                            <span>Add Picture</span>
                            <svg fill="#2C249A" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24"><path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"/></svg>
                        </label>
                    </div>
                </div>
                <div class="w-100 d-flex flex-column">
                    <div class="form-group">
                        <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Event Name" name="name">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <select class="form-control-custom fs-1" id="exampleFormControlSelect1" aria-placeholder="asd" name="category">
                            <!-- <optgroup label = "Event Type"></optgroup> -->
                            <option disabled selected hidden>Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group d-flex align-items-center gap-2">
                        <input type="time" class="form-control d-none" name="date">
                        <select class="form-control-custom" style="font-family: 'Poppins', sans-serif;" name="day" id="day" required></select>
                        <select class="form-control-custom" style="font-family: 'Poppins', sans-serif;" name="month" id="month" required></select>
                        <select class="form-control-custom" style="font-family: 'Poppins', sans-serif;" name="year" id="year" required></select>
                        <input type="time" class="form-control-custom" style="font-family: 'Poppins', sans-serif;" name="time_date" required>
                    </div>
                    
                </div>
            </div>

            <div class="mt-4 header-title">
                <span class="d-flex gap-1 align-items-center">
                    <h5>Tell us more about</h5>
                    <h5 class="text-primary"> your event</h5>
                </span>

                <div class="form-group">
                    <textarea name="desc" id="desc" rows="5" class="form-control textarea-resize-none" placeholder="Event description"></textarea>
                </div>

                <div class="form-group mt-3">
                    <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Social" name="social">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control-custom p-3 w-100 fs-1" placeholder="Location" name="location">
                </div>


            </div>

            <div class="mt-4 d-flex gap-2 header-title flex-column-md">
                <div class="w-100">
                    <div class="form-group d-flex align-items-center gap-2 w-100">
                        <input type="text" class="form-control-custom w-100 p-3 w-100 fs-1" name="cp1" placeholder="Contact Person 1">
                        <input type="text" class="form-control-custom w-100 p-3 w-100 fs-1" name="cp2" placeholder="Contact Person 2">
                    </div>
                    <input type="submit" class="btn btn-primary w-100" value="Save">
                </div>
            </div>
        </form>

        
    </div>
@endsection

@section('custom_js')

<script>
    //Create references to the dropdown's
    const yearSelect = document.getElementById("year");
    const monthSelect = document.getElementById("month");
    const daySelect = document.getElementById("day");

    const months = ['Jan', 'Feb', 'Mar', 'Apr', 
    'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct',
    'Nov', 'Dec'];

    //Months are always the same
    (function populateMonths(){
        for(let i = 0; i < months.length; i++){
            const option = document.createElement('option');
            option.textContent = months[i];
            monthSelect.appendChild(option);
        }
        monthSelect.value = "Jan";
    })();

    let previousDay;

    function populateDays(month){
        //Delete all of the children of the day dropdown
        //if they do exist
        while(daySelect.firstChild){
            daySelect.removeChild(daySelect.firstChild);
        }
        //Holds the number of days in the month
        let dayNum;
        //Get the current year
        let year = yearSelect.value;

        if(month === 'Jan' || month === 'Mar' || 
        month === 'May' || month === 'Jul' || month === 'Aug' 
        || month === 'Oct' || month === 'Dec') {
            dayNum = 31;
        } else if(month === 'Apr' || month === 'Jun' 
        || month === 'Sept' || month === 'Nov') {
            dayNum = 30;
        }else{
            //Check for a leap year
            if(new Date(year, 1, 29).getMonth() === 1){
                dayNum = 29;
            }else{
                dayNum = 28;
            }
        }
        //Insert the correct days into the day <select>
        for(let i = 1; i <= dayNum; i++){
            const option = document.createElement("option");
            option.textContent = i;
            daySelect.appendChild(option);
        }
        if(previousDay){
            daySelect.value = previousDay;
            if(daySelect.value === ""){
                daySelect.value = previousDay - 1;
            }
            if(daySelect.value === ""){
                daySelect.value = previousDay - 2;
            }
            if(daySelect.value === ""){
                daySelect.value = previousDay - 3;
            }
        }
    }

    function populateYears(){
        //Get the current year as a number
        let year = new Date().getFullYear();
        //Make the previous 100 years be an option
        for(let i = 0; i < 101; i++){
            const option = document.createElement("option");
            option.textContent = year - i;
            yearSelect.appendChild(option);
        }
    }

    populateDays(monthSelect.value);
    populateYears();

    yearSelect.onchange = function() {
        populateDays(monthSelect.value);
    }
    monthSelect.onchange = function() {
        populateDays(monthSelect.value);
    }
    daySelect.onchange = function() {
        previousDay = daySelect.value;
    }

    $(".event-tags").select2({
        tags: true,
        placeholder: "Tags",
    });

    $("input#input-event-image").change(function(){
        let filesAmount = this.files.length
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('img#event-image').toggleClass('d-none')
            $('#event-text-temp').toggleClass('d-none')
            $('img#event-image').attr('src', e.target.result); 
        }

        reader.readAsDataURL(this.files[0]); 
    })
</script>

@endsection
