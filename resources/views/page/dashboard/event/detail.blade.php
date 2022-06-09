@extends('theme.dashboard')

@section('content')
    <div class="container-slide d-flex justify-content-center">
        <!-- slide -->
        <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active z-10"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active h-20 overflow-hidden d-flex justify-content-center align-items-center">
                    <!-- <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_181282cbb50%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_181282cbb50%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3125%22%20y%3D%22217.7%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="First slide"> -->
                    <img class="d-block w-100 h-100 object-fit-cover" src="{{asset(asset('storage/'.($event->images->first->image->image == null ? 'events/event.png' : $event->images->first->image->image)))}}" class="mx-w-100 h-100 object-fit-cover" alt="">
                </div>
            </div>
        </div>
        <!-- slide -->
    </div>
    <div class="container pt-4">
        <h2 class="fw-600 text-primary header-title text-capitalized">{{$event->name}}</h2>

        <span class="text-secondary  header-title">Hosted By: {{$event->users->name}}</span>

        <div class="mt-3 header-info-event">
            <div class="d-flex gap-1 align-items-center tag-love">
                <div class="d-flex gap-1 align-items-center">
                    <div class="badge badge-primary p-2">{{$event->categories->first->category->category}}</div>
                </div>
            </div>

            <div class="d-flex flex-column align-items-end date">
                <div class="fs-1" style="font-family: 'Poppins', sans-serif;">{{$time}} WIB</div>
                <div class="fs-1" style="font-family: 'Poppins', sans-serif;">{{$date}}</div>
            </div>
        </div>

        <hr class="border-dark my-4">

        <main class="row content-event">
            <div class="col-lg-8 event-padding mt-3">
                <h4 class="fw-700">Description Event</h4>
                <p>{{$event->desc}}</p>
            </div>
            <div class="col-lg-4 event-padding mt-3">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                <form action="{{route('event.register')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$event->id}}" name="id_event">
                    <button type="submit" class="btn gap-1 btn-primary-opacity text-primary w-100 mt-3 d-flex justify-content-center align-items-center">
                        <div class="">
                            <svg width="21" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.6668 11H6.22238C5.98664 11 5.76054 10.9034 5.59385 10.7315C5.42715 10.5596 5.3335 10.3264 5.3335 10.0833V6.41667C5.3335 6.17355 5.42715 5.94039 5.59385 5.76849C5.76054 5.59658 5.98664 5.5 6.22238 5.5H18.6668C18.9026 5.5 19.1287 5.59658 19.2954 5.76849C19.4621 5.94039 19.5557 6.17355 19.5557 6.41667V10.0833C19.5557 10.3264 19.4621 10.5596 19.2954 10.7315C19.1287 10.9034 18.9026 11 18.6668 11ZM7.11127 9.16667H17.7779V7.27833H7.11127V9.16667Z" fill="#2C249A"/>
                            <path d="M18.6668 12.9066H6.22238C5.98664 12.9066 5.76054 13.0032 5.59385 13.1751C5.42715 13.347 5.3335 13.5802 5.3335 13.8233V17.4166C5.3335 17.6597 5.42715 17.8929 5.59385 18.0648C5.76054 18.2367 5.98664 18.3333 6.22238 18.3333H16.3202L19.5557 14.9416V13.8233C19.5557 13.5802 19.4621 13.347 19.2954 13.1751C19.1287 13.0032 18.9026 12.9066 18.6668 12.9066ZM17.7779 16.4999H7.11127V14.6666H17.7779V16.4999Z" fill="#2C249A"/>
                            <path d="M9.83117 28.8842V28.8292L10.1156 27.555H3.55561V3.66671H21.3334V13.0625L23.1112 11.33V2.75004C23.1112 2.50693 23.0175 2.27377 22.8508 2.10186C22.6841 1.92995 22.458 1.83337 22.2223 1.83337H2.66672C2.43097 1.83337 2.20488 1.92995 2.03818 2.10186C1.87148 2.27377 1.77783 2.50693 1.77783 2.75004V28.4167C1.77783 28.6598 1.87148 28.893 2.03818 29.0649C2.20488 29.2368 2.43097 29.3334 2.66672 29.3334H9.77783C9.78516 29.1825 9.80298 29.0324 9.83117 28.8842Z" fill="#2C249A"/>
                            <path d="M19.5556 17.5725L18.8623 18.2967C19.0343 18.2601 19.192 18.1718 19.3154 18.0429C19.4388 17.914 19.5224 17.7504 19.5556 17.5725Z" fill="#2C249A"/>
                            <path d="M5.3335 24.695C5.3335 24.9381 5.42715 25.1712 5.59385 25.3431C5.76054 25.515 5.98664 25.6116 6.22238 25.6116H10.5246L10.7913 24.42L10.9068 23.9158V23.87H7.11127V22H12.7468L14.5246 20.1666H6.22238C5.98664 20.1666 5.76054 20.2632 5.59385 20.4351C5.42715 20.607 5.3335 20.8402 5.3335 21.0833V24.695Z" fill="#2C249A"/>
                            <path d="M29.769 15.2808L26.7735 12.1916C26.6405 12.0542 26.4826 11.9451 26.3087 11.8707C26.1348 11.7962 25.9484 11.7579 25.7601 11.7579C25.5719 11.7579 25.3855 11.7962 25.2116 11.8707C25.0377 11.9451 24.8798 12.0542 24.7468 12.1916L12.5601 24.8325L11.5557 29.2416C11.5181 29.4318 11.5173 29.6278 11.5532 29.8184C11.5892 30.009 11.6612 30.1903 11.7653 30.3521C11.8693 30.5139 12.0033 30.6529 12.1595 30.7612C12.3157 30.8695 12.4912 30.945 12.6757 30.9833C12.7673 30.9928 12.8596 30.9928 12.9513 30.9833C13.0602 31.0016 13.1712 31.0016 13.2801 30.9833L17.5913 30.0025L29.769 17.4166C29.9021 17.2803 30.0076 17.1182 30.0797 16.9397C30.1517 16.7611 30.1888 16.5696 30.1888 16.3762C30.1888 16.1828 30.1517 15.9913 30.0797 15.8128C30.0076 15.6342 29.9021 15.4721 29.769 15.3358V15.2808ZM16.6846 28.3341L13.4313 29.0766L14.2224 25.7491L23.3601 16.225L25.8668 18.81L16.6846 28.3341ZM26.8713 17.7741L24.3646 15.1891L25.7779 13.75L28.3024 16.3533L26.8713 17.7741Z" fill="#2C249A"/>
                            </svg>
                        </div>                    

                        <span>Register Now</span>
                    </button>
                </form>

                <!-- list contact person -->
                <div class="d-flex flex-column gap-1">
                    <h6 class="mt-4 m-0 fw-600">Contact Person:</h6>
                    <div class="d-flex align-items-center p-2 border rounded gap-2">                        
                        <svg width="18" viewBox="0 0 24 24" fill="#242323" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V7H2V9H4V11H2V13H4V15H2V17H4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2ZM13 4.999C14.648 4.999 16 6.35 16 7.999C15.9971 8.79385 15.6801 9.55533 15.1182 10.1175C14.5562 10.6796 13.7948 10.9968 13 11C11.353 11 10 9.647 10 7.999C10 6.35 11.353 4.999 13 4.999ZM19 18H7V17.25C7 15.031 9.705 12.75 13 12.75C16.295 12.75 19 15.031 19 17.25V18Z"/>
                        </svg>
                        <span style="font-family: 'Poppins', sans-serif;">{{$event->cp1}}</span>
                    </div>
                    @if($event->cp2 != null)
                        <div class="d-flex align-items-center p-2 border rounded gap-2">                        
                            <svg width="18" viewBox="0 0 24 24" fill="#242323" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V7H2V9H4V11H2V13H4V15H2V17H4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2ZM13 4.999C14.648 4.999 16 6.35 16 7.999C15.9971 8.79385 15.6801 9.55533 15.1182 10.1175C14.5562 10.6796 13.7948 10.9968 13 11C11.353 11 10 9.647 10 7.999C10 6.35 11.353 4.999 13 4.999ZM19 18H7V17.25C7 15.031 9.705 12.75 13 12.75C16.295 12.75 19 15.031 19 17.25V18Z"/>
                            </svg>
                            <span style="font-family: 'Poppins', sans-serif;">{{$event->cp2}}</span>
                        </div>
                    @endif
                </div>
                <!-- /list contact person -->
            </div>
        </main>
        
    </div>
@endsection

@section('custom_js')
<script>
    $(".whitelist-ouline").click(function(){
        $(".whitelist-ouline").addClass('d-none');
        $(".whitelist-fill").removeClass('d-none');
    })
    $(".whitelist-fill").click(function(){
        $(".whitelist-fill").addClass('d-none');
        $(".whitelist-ouline").removeClass('d-none');
    })

    $(".container-varians").on('click', function (event) {
        $target = $(event.target);
        $('.container-varians > span').removeClass('border-primary text-primary')
        $target.addClass('border-primary text-primary');
    });
</script>
@endsection