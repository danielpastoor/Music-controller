@extends('layouts.app')
@section('customsidebar')
<ul class="nav flex-column mb-2">
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-4 mb-1 text-muted">
        <span>Devices</span>
    </h6>
    <li class="nav-item">
        <a class="nav-link" href="#">
            Own Device
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            Woonkamer
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            Slaapkamer
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            Woonkamer 2
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            Keuken
        </a>
    </li>
</ul>
<ul class="nav flex-column mb-2">
<li class="nav-item">
        <div class="left-playbar border-top">
            <div class="wrapper ">
                <div class="player-container">
                    <div class="player-body">
                        <div class="body-cover">
                            <div class="body-buttons">
                                <ul class="list list-buttons">
                                    <li><a href="#" class="list-link"><i class="fa fa-step-backward"></i></a></li>

                                    <li><a href="#" class="list-link"><i class="fa fa-play"></i></a></li>

                                    <li><a href="#" class="list-link"><i class="fa fa-step-forward"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</li>
</ul>
@endsection
@section('content')
<div style="overflow-y: scroll; overflow-x: hidden; height: 750px">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 font-weight-bold">Recommended Albums</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">
                    <</button> <button class="btn btn-sm btn-outline-secondary">>
                </button>
            </div>
        </div>
    </div>
    <div style="display: grid;grid-template-columns: repeat(5, 1fr);grid-template-rows: 1fr;grid-column-gap: 0px;grid-row-gap: 0px;">
        <div style="grid-area: 1 / 1 / 2 / 2;">
            <img src="https://i1.sndcdn.com/artworks-000086747517-85nux6-t200x200.jpg"" alt="">
            <p> </p>
            <h5>Happy Little Pill</h5>
            <p class=" text-secondary">Casper Zazz Remix</p>
        </div>
        <div style="grid-area: 1 / 2 / 2 / 3;">
            <img src="https://i1.sndcdn.com/artworks-000070788608-lip8dr-t200x200.jpg" alt="">
            <p> </p>
            <h5>Can't Rely On You</h5>
            <p class="text-secondary">Paloma Faith</p>
        </div>
        <div style="grid-area: 1 / 3 / 2 / 4;">
            <img src="https://i1.sndcdn.com/artworks-1sscy2Ztz93B-0-t200x200.jpg" alt="">
            <p> </p>
            <h5>Cold Water</h5>
            <p class="text-secondary">Major Lazer</p>
        </div>
        <div style="grid-area: 1 / 4 / 2 / 5;">
            <img src="https://i1.sndcdn.com/artworks-000316656306-7sm242-t200x200.jpg" alt="">
            <p> </p>
            <h5>Get you the moon</h5>
            <p class="text-secondary">Kina</p>
        </div>
        <div style="grid-area: 1 / 5 / 2 / 6;">
            <img src="https://i1.sndcdn.com/artworks-000223610951-237t0v-t200x200.jpg"" alt="">
            <p> </p>
            <h5>Party On The West Coast</h5>
            <p class=" text-secondary">Matoma, Faith Evans & The Notorious B.I.G</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 font-weight-bold">Recently Issued</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-secondary">
                            <</button> <button class="btn btn-sm btn-outline-secondary">>
                        </button>
                    </div>
                </div>
            </div>
            <div style="display: grid;grid-template-columns: repeat(3, 1fr);grid-template-rows: repeat(3, 1fr);grid-column-gap: 0px;grid-row-gap: 0px;">
                <div class="recentlypl" style="grid-area: 1 / 1 / 2 / 2;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-"><img style="height: 80px;" src="https://i1.sndcdn.com/artworks-7d1xREm1uRXU-0-t200x200.jpg" alt=""></div>
                        <div class="col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
                <div class="recentlypl" style="grid-area: 1 / 2 / 2 / 3;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-000569936375-ijc2rk-t200x200.jpg"" alt="">
                        </div>
                        <div class=" col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
                <div class="recentlypl" style="grid-area: 1 / 3 / 2 / 4;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-4L5QwybPEvzh-0-t200x200.jpg" alt="">
                        </div>
                        <div class="col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
                <div class="recentlypl" style="grid-area: 2 / 1 / 3 / 2;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-be8OFsVmYMjV-0-t200x200.jpg"" alt="">
                        </div>
                        <div class=" col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>

                </div>
                <div class="recentlypl" style="grid-area: 2 / 2 / 3 / 3;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-Q5RU9xLMU7qz-0-t200x200.jpg" alt="">
                        </div>
                        <div class="col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
                <div class="recentlypl" style="grid-area: 2 / 3 / 3 / 4;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-000556111122-wvh8rh-t200x200.jpg" alt="">
                        </div>
                        <div class="col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
                <div class="recentlypl" style="grid-area: 3 / 1 / 4 / 2;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-QRD764QgitzH-0-t500x500.jpg" alt="">
                        </div>
                        <div class="col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
                <div class="recentlypl" style="grid-area: 3 / 2 / 4 / 3;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-sj26XvilPuki-0-t200x200.png" alt="">
                        </div>
                        <div class="col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
                <div class="recentlypl" style="grid-area: 3 / 3 / 4 / 4;">
                    <div class="row" style="align-items: center">
                        <div class="px-md-3 col-">
                            <img style="height: 80px;" src="https://i1.sndcdn.com/artworks-ooGe22ATOBC3-0-t200x200.jpg" alt="">
                        </div>
                        <div class="col-">
                            <h6>Blauwe dag</h6>
                            <p class="text-secondary">Suzan & Freek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 font-weight-bold">Top List</h1>
            </div>
            test
        </div>
    </div>
</div>

<div class="playerbar border">
    <div class="">
        <div class="contain">
            <div class="holder">
                <div class="album" style="background-image: url('https://i1.sndcdn.com/artworks-000569936375-ijc2rk-t200x200.jpg')"></div>
                <div class="mejs-player">
                    <marquee style="width: 20%" class="player-h1" scrollamount="3.5">Reunie - <span class="text-secondary">Snelle</span></marquee>
                    <div style="height: 35px"></div>
                    <div class="range"></div>
                    <audio>
                        <source src="https://furrowthebrow.github.io/TakesMeBack.mp3" type="audio/mpeg"/>
                    </audio>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection