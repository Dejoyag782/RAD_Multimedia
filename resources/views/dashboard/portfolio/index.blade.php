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
                        
                        <section class="bg-light" id="portfolio" style="padding-top: 10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h2 class="text-uppercase text-start section-heading">Portfolio</h2>
                                        <h3 class="text-start text-muted section-subheading" style="font-size: 20px;">Add, Edit or Remove | Projects</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal1" data-bs-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                                            </div><img class="img-fluid" src="welcome_assets/img/portfolio/Video%20Editing.png">
                                        </a>
                                        <div class="portfolio-caption">
                                            <h4>Clips</h4>
                                            <p class="text-muted">Video Edits</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal2" data-bs-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                                            </div><img class="img-fluid" src="welcome_assets/img/portfolio/Videography.png">
                                        </a>
                                        <div class="portfolio-caption">
                                            <h4>Shoot</h4>
                                            <p class="text-muted">Videography</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal3" data-bs-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                                            </div><img class="img-fluid" src="welcome_assets/img/portfolio/3-thumbnail.jpg">
                                        </a>
                                        <div class="portfolio-caption">
                                            <h4>Window</h4>
                                            <p class="text-muted">Photography</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal4" data-bs-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                                            </div><img class="img-fluid" src="welcome_assets/img/portfolio/graphics%20design.png">
                                        </a>
                                        <div class="portfolio-caption">
                                            <h4><strong>Explore</strong><br></h4>
                                            <p class="text-muted">Graphic Design</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal5" data-bs-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                                            </div><img class="img-fluid" src="welcome_assets/img/portfolio/serum-3d-665x499.jpg">
                                        </a>
                                        <div class="portfolio-caption">
                                            <h4>Blast</h4>
                                            <p class="text-muted">Sound Design</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 portfolio-item"><a class="portfolio-link" href="#portfolioModal6" data-bs-toggle="modal">
                                            <div class="portfolio-hover">
                                                <div class="portfolio-hover-content"><i class="fa fa-plus fa-3x"></i></div>
                                            </div><img class="img-fluid" src="welcome_assets/img/portfolio/Song%20Writing.png">
                                        </a>
                                        <div class="portfolio-caption">
                                            <h4>Lyric</h4>
                                            <p class="text-muted">Song Writing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
