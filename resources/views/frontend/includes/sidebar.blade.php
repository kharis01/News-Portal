<!-- ======= Sidebar ======= -->
<div class="aside-block">

    <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular"
                type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

        <!-- Popular -->
        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">

            @foreach ($side_news as $row)
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">{{ $row->category->name }}</span> <span
                            class="mx-1">&bullet;</span> <span>{{ $row->created_at }}</span></div>
                    <h2 class="mb-2">
                        <a href="{{ route('detailnews', $row->slug) }}">{{ $row->title }}</a>
                    </h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
            @endforeach

        </div> <!-- End Popular -->

        <!-- Trending -->
        <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                        Will
                        Inspire Your New Haircut</a></h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                        Medium Hair</a>
                </h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                        Guide</a>
                </h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul
                        5th '22</span></div>
                <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                        Video
                        Calls?</a></h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                        Pimples
                        Away)</a></h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                        Know</a>
                </h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
        </div> <!-- End Trending -->

        <!-- Latest -->
        <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                        Guide</a>
                </h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                        Pimples
                        Away)</a></h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should
                        Know</a>
                </h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During
                        Video
                        Calls?</a></h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That
                        Will
                        Inspire Your New Haircut</a></h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

            <div class="post-entry-1 border-bottom">
                <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                    <span>Jul 5th '22</span></div>
                <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                        Medium Hair</a>
                </h2>
                <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>

        </div> <!-- End Latest -->

    </div>
</div>



<div class="aside-block">
    <h3 class="aside-title">Categories</h3>
    <ul class="aside-links list-unstyled">
        @foreach ($nav_category as $row)
            <li>
                <a href="{{ route('detailcategory', $row->slug) }}">
                    <i class="bi bi-chevron-right"></i>{{ $row->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div><!-- End Categories -->


