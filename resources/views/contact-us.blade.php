<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Your friendly Portland area landscaping and gardening store is here for business." />
        <meta name="keywords" content="nursery, Portland, Yamhill, Willamette Valley, Oregon, plants, grass, shrubs, trees, garden, gardening, landscaping" />
        <title>Contact | Yamhill Fields Nursery</title>
        @include('includes.head')
    </head>
    <body class="page-contact-us">
        <div class="body-wrapper">

            <header>
                @include('includes.header-components')
                <div class="subtitle-container">
                    <h2 class="subtitle-container__subtitle">Contact Us</h2>
                </div>
            </header>
            @include('includes.logo')
            @include('includes.nav')

            <div class="content">    
                <div class="inner-wrapper">
                    <div class="content-row">
                        <div class="form contact-form col-sma-12 col-lar-6">
                            <h3>Contact Us</h3>
                            <p>Come buy lots of quality plants at our fantastic nursery!</p>
                            <p>Thank you <strong>@{{writeResponse}}</strong> for writing us!</p>
                            <?php
                            echo Form::open(array('id' => "contactForm", 'url' => '/contact-us-form-validation', 'onsubmit' => 'return validateContactForm();'));
                            echo "<div class='input-container'><label class='form__form-label' for='userName'>Name: </label>" . Form::text('userName', '', ['v-model' => 'userName', 'id' => 'userName']) . "</div>";
                            echo "<div class='input-container'><label class='form__form-label' for='userEmail'>Email: </label>" . Form::text('userEmail', '', ['id' => 'userEmail']) . "</div>";
                            echo "<div class='input-container'><label class='form__form-label' for='userSubject'>Subject: </label>" . Form::text('userSubject', '', ['id' => 'userSubject']) . "</div>";
                            echo "<div class='input-container'><label class='form__form-label' for='userComments'>Comments/Questions: </label>" . Form::textarea('userComments', '', ['id' => 'userComments']) . "</div>";
                            echo "<div class='form__submit input-container'>" . Form::submit('Submit', array('id' => 'contactButton')) . "</div>";
                            echo Form::close();
                            ?>
                            <div class="javascript-validation-results-contact-us"></div>
                            @if(session()->has('submitResults'))						
                            <div class="form__transmit-results">
                                {{ session()->get('submitResults') }}
                            </div>	
                            @endif
                        </div>
                        <div class="form contact-form col-sma-6">
                            @if (count($errors) > 0)
                            <div class="validation-results">                      
                                @foreach ($errors->all() as $error)
                                <div class="validation__results">{{ $error }}</div>
                                @endforeach			               
                            </div>
                            @endif		
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter-container">
                <div class="inner-wrapper">
                    <div class="subfooter-container__background content__content-image"></div>
                </div>
            </div>
            @include('includes.footer')
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                setCurrentPage(5, "mobileNav");
                setCurrentPage(5, "desktopNav");
            });
        </script>
        <script type="text/javascript" src="/assets/javascript/contact-form-validation.js?mod=11182019"></script>
    </body>
</html>



