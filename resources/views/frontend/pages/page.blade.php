@extends('frontend.template.main')

@section('content')
    <div class="row greyBG">
        <div class="container">
            <div class="jumbotron text-center textWhite">
                <img src="https://placekitten.com/302/301" alt="..." class="img-circle center-block">
                <h1>RAWRSOME</h1>
                <p>We make beautiful, accessible and websites that work for you!</p>
            </div>
        </div>
    </div>
    <div class="container" id="portfolio">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Portfolio</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <ul class="grid cs-style-3">
                <li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure>
                        <img class="img-responsive" src="images/AandCcars.jpg" />
                        <figcaption>
                            <h3>A and C Cars</h3>
                            <span>Taxi Service</span>
                            <a href="http://www.aandccars.co.uk/">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure>
                        <img class="img-responsive " src="images/AandCcars.jpg" />
                        <figcaption>
                            <h3>A and C Cars</h3>
                            <span>Taxi Service</span>
                            <a href="http://www.aandccars.co.uk/">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure>
                        <img class="img-responsive " src="images/AandCcars.jpg" />
                        <figcaption>
                            <h3>A and C Cars</h3>
                            <span>Taxi Service</span>
                            <a href="http://www.aandccars.co.uk/">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure>
                        <img class="img-responsive " src="images/AandCcars.jpg" />
                        <figcaption>
                            <h3>A and C Cars</h3>
                            <span>Taxi Service</span>
                            <a href="http://www.aandccars.co.uk/">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div>
    <div class="row greyBG" id="aboutMe">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>About Me!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-5 col-xs-offset-1">
                    <p>I am a talented developer and i'm committed to making your website a success and an influence within your sector. I don't just create a site, I mould you into a better internet marketer. This creates a brand, brands are good within the online world. Where would we be without the internet? Could your company survive?</p>
                </div>
                <div class="col-xs-5">
                    <p>I don't just build websites, I build long lasting relationships with my customers from from the beginning through to after care support. I will always be on hand to help, advise and assist wherever possible.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row orangeBG greyText" id="enquire" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>Enquire With Me!</h2>
                </div>
            </div>
            <div class="row">
                <form>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" class="form-control" id="number" name="number" placeholder="Your Number">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary col-xs-12 btn-lg">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row greyBG">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h2>Contact Us</h2>
                    <p>
                        Email: Daniel@dlssystems.co.uk<br />
                        Call: 07402013024
                    </p>
                </div>
                <div class="col-xs-4">
                    <h2>Follow Us!</h2>
                </div>
                <div class="col-xs-4">
                    <h2>About RawrCMS</h2>
                    <p>This site was built on Rawrsome CMS using the latest Laravel technologies.</p>
                </div>
            </div>
        </div>
    </div>
@endsection