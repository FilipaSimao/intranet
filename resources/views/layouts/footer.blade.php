<footer>
    <div class="container">
        <div class="row responsive">
            <div class="column column-67 stats">
                <h1>21941</h1>
                <h4>{{ __("web.operations") }}</h4>
            </div>
            <div class="column column-33 logo">
                @svg('img/logo/logo.svg')
            </div>
        </div>

        <div class="row responsive">
            <div class="column column-67 newsletter">
                <form target="_blank" name="theform" action="https://my.sendinblue.com/users/subscribe/js_id/2gxys/id/1" method="post">
                    <input type="hidden" name="js_id" value="2mxq1">
                    <input type="hidden" name="listid" value="5">
                    <input type="hidden" name="from_url" value="yes">
                    <input type="hidden" name="hdn_email_txt" value="1501605123481">

                    <h4>{{ __('web.subscribe') }}</h4>
                    <input type="email" name="email" placeholder="{{ __('Your Email Address') }}" value="">
                    <button type="submit" name="subscribe">
                        <i class="icon icon-arrow"></i>
                    </button>
                </form>
            </div>
            <div class="column column-33 solidarity">
                <h4>{{ __('web.solidary.title') }}</h4>
                <a class="color-link" href="tel:{{ __('web.solidary.number') }}">{{ __('web.solidary.number') }}</a>
                <p>{{ __('web.solidary.description') }}</p>
            </div>
        </div>

        <div class="row responsive" style="margin-top: 24px;">
            <div class="column column-67 social">
                <h4>{{ __('web.social') }}</h4>
                <a target="_blank" class="color-link" href="https://www.facebook.com/animaisderua"><i class="icon icon-facebook"></i></a>
                <a target="_blank" class="color-link" href="https://www.instagram.com/animaisderua/"><i class="icon icon-instagram"></i></a>
                <a target="_blank" class="color-link" href="https://www.youtube.com/user/animaisderuaAdR"><i class="icon icon-youtube"></i></a>
            </div>
            <div class="column column-33 contact">
                <a class="color-link lined">{{ __("web.contact") }}</a>
            </div>
        </div>
    </div>
</footer>
