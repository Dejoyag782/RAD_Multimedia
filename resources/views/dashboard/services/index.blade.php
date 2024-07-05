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
                       
                        <section id="services" style="padding-top: 10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h2 class="text-uppercase text-start section-heading" style="text-align: left;">Services</h2>
                                        <h3 class="text-muted section-subheading" style="font-size: 20px;text-align: left;margin-bottom: 30pxpx;">Add, Edit or Remove | Services</h3>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-film fa-stack-1x fa-inverse"></i></span>
                                        <h4 class="section-heading">Video Editing</h4>
                                        <p class="text-muted">Our expert video editing services bring your vision to life, whether it's for promotional videos, social media content, or corporate presentations.<br></p>
                                    </div>
                                    <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-video-camera fa-stack-1x fa-inverse"></i></span>
                                        <h4 class="section-heading">Videography</h4>
                                        <p class="text-muted">Our videography service captures your moments with precision &amp; creativity. We do corporate events,&nbsp; promotional shoots, weddings &amp; special occasions.<br></p>
                                    </div>
                                    <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></span>
                                        <h4 class="section-heading">Photography</h4>
                                        <p class="text-muted">Our photography services ensures to capture the essence of every moment. Our photographers do corporate events to portraits and lifestyle shoots.<br></p>
                                    </div>
                                    <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i></span>
                                        <h4 class="section-heading">Graphic Design</h4>
                                        <p class="text-muted">Our team excels in creating eye-catching visuals, from social media graphics to blending artistic flair strategically for stunning &amp; effective designs.<br></p>
                                    </div>
                                    <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-microphone fa-stack-1x fa-inverse"></i></span>
                                        <h4 class="section-heading">Sound Design</h4>
                                        <p class="text-muted">Our team of skilled sound designers specializes in creating immersive audio experiences, from custom soundtracks, effects, voiceovers &amp; mixing.<br></p>
                                    </div>
                                    <div class="col-md-4"><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-pencil fa-stack-1x fa-inverse"></i></span>
                                        <h4 class="section-heading">Song Writing</h4>
                                        <p class="text-muted">Our talented songwriters specialize in crafting original lyrics &amp; melodies across genres, ensuring each composition resonates with your audience<br></p>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center"><button class="btn btn-primary d-xxl-flex align-items-xxl-center" type="button" style="margin-bottom: 75px;margin-top: 75px;min-width: 30px;min-height: 30px;font-size: 30pt;"><i class="fa fa-plus" style="font-size: 40pt;"></i>&nbsp;Add a Service</button></div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
