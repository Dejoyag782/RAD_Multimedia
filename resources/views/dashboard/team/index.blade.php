<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <div class="container" style="margin-top: 100px;">
            <div class="row d-xxl-flex flex-row justify-content-xxl-center">

                @include('layouts.sidebar')

                <div class="col-md-6 view-cont flex-sm-grow-1 flex-md-grow-1 flex-lg-grow-1 flex-xl-grow-1 flex-xxl-grow-1" style="background: linear-gradient(52deg, rgba(52,58,64,0.6) 0%, rgba(255,255,255,0.36)), rgba(69,69,69,0.66);border-top-right-radius: 10px;border-bottom-right-radius: 10px;padding-top: 12px;padding-bottom: 12px;">
                    <div  style="min-height: 100%;min-width: 100%;background: rgba(255,255,255,0.86);border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
                        
                        <section class="bg-light" id="team" style="padding-top: 10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h2 class="text-uppercase text-start section-heading">Team</h2>
                                        <h3 class="text-start text-muted section-subheading" style="font-size: 15pt;">Add, Edit or Remove | Talent</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="team-member"><img class="rounded-circle mx-auto" src="welcome_assets/img/team/318802872_3421445571510773_8389724998033089710_n.jpg">
                                            <h4>Dex Joshua Curayag</h4>
                                            <p class="text-muted">Videographer | Sound Designer | Video Editor</p>
                                            <ul class="list-inline social-buttons">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.facebook.com/dexjoshua.curayag.5/"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/dex-joshua-curayag-67764b316/"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="team-member"><img class="rounded-circle mx-auto" src="welcome_assets/img/team/312658485_3350485938527610_3870889274646053422_n.jpg">
                                            <h4>Rogelio Tasong Jr</h4>
                                            <p class="text-muted">Video Editor | Videographer | Graphic Designer</p>
                                            <ul class="list-inline social-buttons">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.facebook.com/rj.tasong"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="team-member"><img class="rounded-circle mx-auto" src="welcome_assets/img/team/93245406_1585567444925506_8528516718580989952_n.jpg">
                                            <h4>Aleksandr Memphis Olaguir</h4>
                                            <p class="text-muted">Photographer | Graphic Designer | Photo Editor</p>
                                            <ul class="list-inline social-buttons">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.facebook.com/Memphis1302"><i class="fa fa-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center"><button class="btn btn-primary d-xxl-flex align-items-xxl-center" type="button" style="margin-bottom: 75px;margin-top: 75px;min-width: 30px;min-height: 30px;font-size: 30pt;"><i class="fa fa-plus" style="font-size: 40pt;"></i>&nbsp;Add to Team</button></div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
