<x-header-footer-template>

    @section('content')

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Add a news</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-form-area">
                        <form action="{{route('post.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
                                </div>
                                {{--<div class="col-12">
                                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Add tags with ',' separation" required>
                                </div>--}}
                                {{--<div class="col-12">
                                    <input type="text" class="form-control" id="content" placeholder="Content">
                                </div>--}}
                                <div class="col-12">
                                    <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="Content" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn newspaper-btn mt-30 w-100" type="submit">Upload News</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Address:</h6>
                        <p>481 Creekside Lane Avila <br>Beach, CA 93424</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Phone:</h6>
                        <p>+53 345 7953 32453 <br>+53 345 7557 822112</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Email:</h6>
                        <p>yourmail@gmail.com</p>
                    </div>
                </div>
            </div>

            {{--<!-- Google Maps -->
            <div class="map-area">
                <div id="googleMap"></div>
            </div>--}}

        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->
    @endsection

</x-header-footer-template>
