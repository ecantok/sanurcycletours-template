@extends('layouts.frontapp')

@section('title', 'Testimonials')

@section('content')
    <section id="main-cont" class="bg-maroon">
        <div class="container">
            <h2 class="welcome text-yellow text-shadow">TESTIMONIALS</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-area">
                        <!-- Start Feature Content -->
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-2 mb-3">
                                <div id="TA_linkingWidgetRedesign453" class="TA_linkingWidgetRedesign" bis_skin_checked="1">
                                    <div id="CDSWIDLNKR" class=" cx_brand_refresh1 border" bis_skin_checked="1">
                                        <div class="widLNKRInner" bis_skin_checked="1">
                                            <ul>
                                                <li id="talink" class="widLNKSml"><a target="_blank"
                                                        href="https://www.tripadvisor.co.uk/Attraction_Review-g297700-d3949024-Reviews-Sanur_Cycle_Tours-Sanur_Denpasar_Bali-m15079.html"
                                                        onclick="ta.cds.handleTALink(15079,this);return true;"
                                                        rel="nofollow">Read reviews of Sanur Cycle Tours</a></li>
                                                <li> <a target="_blank" href="https://www.tripadvisor.co.uk/"><img
                                                            src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg"
                                                            alt="Tripadvisor"></a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <script
                                    src="https://www.jscache.com/wejs?wtype=linkingWidgetRedesign&amp;uniq=453&amp;locationId=3949024&amp;lang=en_UK&amp;border=true&amp;display_version=2">
                                </script>
                            </div>

                            <div class="col-lg-2 col-md-4 col-sm-2 mb-3">
                                <div id="TA_virtualsticker766" class="TA_virtualsticker"
                                    style="width: 155px; overflow: hidden; margin-left: -10px;" bis_skin_checked="1">
                                    <div class="container" bis_skin_checked="1">
                                        <div id="CDSWIDSTICKER" bis_skin_checked="1"> <a
                                                href="https://www.tripadvisor.co.uk/Attraction_Review-g297700-d3949024-Reviews-Sanur_Cycle_Tours-Sanur_Denpasar_Bali.html"
                                                onclick="ta.cds.handleTALink(18961,this);return true;" target="_blank"
                                                rel="nofollow">
                                                <div id="CDSWIDHEADER" bis_skin_checked="1">
                                                    <div id="CDSWIDSTICKERHEADLINE" bis_skin_checked="1">Reviewed on
                                                        tripadvisor.co.uk</div>
                                                </div>
                                            </a>
                                            <div id="CDSWIDLOGO" bis_skin_checked="1"> <a target="_blank"
                                                    href="https://www.tripadvisor.co.uk/"
                                                    bis_size="{&quot;x&quot;:1096,&quot;y&quot;:1447,&quot;w&quot;:130,&quot;h&quot;:55,&quot;abs_x&quot;:1096,&quot;abs_y&quot;:1447}"><img
                                                        src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/tripadvisor_sticker_logo_88x55-18961-2.png"
                                                        alt="TripAdvisor"
                                                        bis_size="{&quot;x&quot;:1118,&quot;y&quot;:1447,&quot;w&quot;:88,&quot;h&quot;:55,&quot;abs_x&quot;:1118,&quot;abs_y&quot;:1447}"
                                                        bis_id="bn_7n5xgoaowjm0lxx1vvcwa6"></a> </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        window.onload = function() {
                                            var headline = document.getElementById("CDSWIDSTICKERHEADLINE");
                                            if (headline.scrollHeight > 30) {
                                                headline.className = "longHeadline";
                                            }
                                        }
                                    </script>
                                </div>
                                <script
                                    src="https://www.jscache.com/wejs?wtype=virtualsticker&amp;uniq=766&amp;lang=en_UK&amp;locationId=3949024&amp;display_version=2">
                                </script>
                            </div>

                            <div class="col-lg-2 col-md-4 col-sm-2 mb-3">
                                <div id="TA_cdswritereviewnew77" class="TA_cdswritereviewnew" bis_skin_checked="1">
                                    <ul id="mrKh5vkv" class="TA_links EDMQyo3nDj4Z list-unstyled">
                                        <li id="eq0XI7C" class="u65RYqoOvsVe"><a target="_blank"
                                                href="https://www.tripadvisor.co.uk/"><img
                                                    src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/medium-logo-29834-2.png"
                                                    alt="TripAdvisor"></a>
                                        </li>
                                    </ul>
                                </div>
                                <script
                                    src="https://www.jscache.com/wejs?wtype=cdswritereviewnew&amp;uniq=77&amp;locationId=3949024&amp;lang=en_UK&amp;border=true&amp;display_version=2">
                                </script>
                            </div>
                        </div>

                        <div class="row">
                            @forelse ($testimonials as $testimonial)
                                <div class="col-lg-12 mb-3">
                                    <div class="card bg-maroon">
                                        <div class="card-header text-yellow text-shadow fw-bold">
                                            {{ $testimonial->title }}
                                        </div>
                                        <div class="card-body text-yellow">
                                            <blockquote class="blockquote mb-0">
                                                <p class="fs-6">
                                                    {{ $testimonial->content }}
                                                    <br>
                                                    <small>
                                                        @for ($i = 1; $i <= $testimonial->stars; $i++)
                                                            <i class="bi bi-star-fill"></i>
                                                        @endfor
                                                    </small>
                                                </p>
                                                <footer class="blockquote-footer">{{ $testimonial->author }}</footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h1 class="text-center text-yellow">Testimonial Not Found</h1>
                            @endforelse

                        </div>
                        <!-- End Feature Content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
