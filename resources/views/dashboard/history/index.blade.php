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
                        
                        <section id="history" style="padding-top: 10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h4 class="text-uppercase text-start section-heading">HISTORY</h4>
                                        <h5 class="text-start text-muted section-subheading" style="font-size: 15pt;">Add, Edit or Remove | History</h5>
                                    </div>
                                </div>
                                
                                <hr style="margin-top:20px; margin-bottom:20px;">

                                <div class="row">
                                    <div class="col-lg-12 bg-dark" style="padding: 10px 10px 40px 10px;">
                                        <ul class="list-group timeline">
                                            <li class="list-group-item  bg-dark timeline">
                                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="welcome_assets/img/about/1.jpg"></div>
                                                <div class="timeline-panel">
                                                    <div class="timeline-heading text-light">
                                                        <h4 >November 2023</h4>
                                                        <h4 class="subheading">How we Began</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">RAD Clips Media began when Nissan Bohol looked for videographers to shoot a testimonial video. This is when the founders of RAD which are Dex Joshua Curayag &amp; Rogelio Tasong Jr. were asked to shoot for a testimonial video.&nbsp;</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item bg-dark timeline-inverted">
                                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="welcome_assets/img/about/2.jpg"></div>
                                                <div class="text-start timeline-panel" style="padding-left: 20px;padding-right: 100px;">
                                                    <div class="timeline-heading text-light">
                                                        <h4>January 2024</h4>
                                                        <h4 class="subheading">Another Milestone</h4>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <p class="text-muted">The testimonial video of Nissan Bohol that was shot by our team ranked in the top 5 at Nissan Philippines.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item  bg-dark ">
                                                <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xxl-center align-items-xxl-center timeline-image"><i class="fa fa-plus" style="font-size: 50pt;"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
