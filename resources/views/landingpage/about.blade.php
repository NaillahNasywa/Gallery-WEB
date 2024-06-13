@extends('layout.lp')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style>
.cardtext {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #333;
    font-size: 50px
}

.cardtext span{
    font-size: 30px;
    color: #333;
}

p {
    line-height: 1.6;
    color: #666;
}

.team-member {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.team-member img {
    max-width: 150px;
    border-radius: 50%;
}

.team-member-info {
    flex: 1;
    margin-left: 20px;
}

.team-member-info h3 {
    margin-top: 0;
    color: #333;
}

.team-member-info p {
    margin-bottom: 10px;
}
.featured-images img{
    /* background-color: aqua; */
    /* margin-right: 50px; */
}
</style>
<div class="cardtext">
    <h1><strong>A</strong><span>bout <strong>U</strong><span>s</span></h1>
    
    <p>The sky and clouds often ignite imagination and inspiration.
        This gallery can serve as a space for visitors to contemplate and be inspired by the beauty of the sky, 
        as well as to create their own artworks.
    </p>
    
    {{-- <div class="team-member">
        <img src="https://via.placeholder.com/150" alt="Team Member 1">
        <div class="team-member-info">
            <h3>John Doe</h3>
            <p>Co-Founder</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div> --}}

</div>

    
    {{-- <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column right-box">
        <div class="content mb-5">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis orci eget arcu rhoncus, eget tincidunt risus pulvinar.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis orci eget arcu rhoncus, eget tincidunt risus pulvinar.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis orci eget arcu rhoncus, eget tincidunt risus pulvinar.
            </p> 
            
        </div>
    </div> --}}
    
    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column right-box">
        <div class="featured-images mb-5 d-flex justify-content-around">
            <img src="{{ asset('assets-web/img/ilustrasi/c.png') }}" class="img-fluid" style="width: 200px;">
            <img src="{{ asset('assets-web/img/ilustrasi/c.png') }}" class="img-fluid" style="width: 200px;">
            <img src="{{ asset('assets-web/img/ilustrasi/c.png') }}" class="img-fluid" style="width: 200px;">
            <img src="{{ asset('assets-web/img/ilustrasi/c.png') }}" class="img-fluid" style="width: 200px;">
            <img src="{{ asset('assets-web/img/ilustrasi/c.png') }}" class="img-fluid" style="width: 200px;">
            <img src="{{ asset('assets-web/img/ilustrasi/c.png') }}" class="img-fluid" style="width: 200px;">
        </div>
    </div>

 @endsection