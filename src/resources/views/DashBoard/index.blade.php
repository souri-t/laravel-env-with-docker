@extends('DashBoard/layout')
@section('content')
<h1 class="page-header">Dashboard</h1>
<div class="row">
    <div class="col-12 mb-4 col-xl-8">
        <div class="card">
            <h5 class="card-header">愛知県の週間天気予報</h5>
            <div class="card-body">
            <div class="mamewaza_weather"><div><div class="mamewaza_weather_exp"></div></div></div><script type="text/javascript" src="https://mamewaza.net/weather.js?200804"></script><script type="text/javascript">mamewaza_weather({layout:"horizontal",when:"7days",region:"230000",style:"div.mamewaza_weather > div{background-color:transparent;}div.mamewaza_weather th,div.mamewaza_weather td,div.mamewaza_weather div.mamewaza_weather_exp{padding:10px;}div.mamewaza_weather > div{padding:10px;font-size:14px;}div.mamewaza_weather th,div.mamewaza_weather td{border-bottom:1px dashed #eeeeee;}div.mamewaza_weather,div.mamewaza_weather a{color:#000;}div.mamewaza_weather span.mamewaza_weather_icon{color:inherit;font-size:36px;text-shadow:none;}div.mamewaza_weather div.mamewaza_weather_exp,div.mamewaza_weather div.mamewaza_weather_exp a{color:#000000;font-size:12px;}div.mamewaza_weather td.mamewaza_weather_sat,div.mamewaza_weather td.mamewaza_weather_sat span.mamewaza_weather_icon{color:#00f;}div.mamewaza_weather td.mamewaza_weather_sun,div.mamewaza_weather td.mamewaza_weather_sun span.mamewaza_weather_icon{color:#f00;}"})</script>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4 col-xl-4">
        <div class="card">
            <h5 class="card-header">News</h5>
            <div class="card-body">
                <a class="twitter-timeline" data-chrome=”noheader” data-height="300"
                    href="https://twitter.com/BBCBreaking?ref_src=twsrc%5Etfw">Tweets by BBCBreaking</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4 col-xl-8">
        <div class="card">
            <h5 class="card-header">Bitcoin</h5>
            <div class="card-body">
                <div
                    style="height:360px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
                    <div style="height:340px; padding:0px; margin:0px; width: 100%;"><iframe
                            src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505"
                            width="100%" height="336px" scrolling="auto" marginwidth="0" marginheight="0"
                            frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe>
                    </div>
                    <div
                        style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                        <a href="https://coinlib.io" target="_blank"
                            style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency
                            Prices</a>&nbsp;by Coinlib</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4 col-xl-4">
        <div class="card">
            <h5 class="card-header">News</h5>
            <div class="card-body">
                <a class="twitter-timeline" data-chrome=”noheader” data-height="400"
                    href="https://twitter.com/nhk_news?ref_src=twsrc%5Etfw">Tweets by nhk_news</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4 col-xl-4">
        <div class="card">
            <h5 class="card-header">News</h5>
            <div class="card-body">
                <a class="twitter-timeline" data-chrome=”noheader” data-height="400"
                    href="https://twitter.com/UN_NERV?ref_src=twsrc%5Etfw">Tweets by UN_NERV</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4 col-xl-4">
        <div class="card">
            <h5 class="card-header">News</h5>
            <div class="card-body">
                <a class="twitter-timeline" data-chrome=”noheader” data-height="400"
                    href="https://twitter.com/36krJ?ref_src=twsrc%5Etfw">Tweets by 36krJ</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    <div class="col-12 mb-4 col-xl-4">
        <div class="card">
            <h5 class="card-header">News</h5>
            <div class="card-body">
                <a class="twitter-timeline" data-chrome=”noheader” data-height="400"
                    href="https://twitter.com/gigazine?ref_src=twsrc%5Etfw">Tweets by gigazine</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    <script>
    $("#animation_button").on('click', function() {
        //     $("#sidebar").animate({width:"500px"},1000,"easeInOutExpo");
        $("#sidebar").hide('slow');
        $("#sidebar").animate({
            width: 'toggle'
        }, 400);

    });
    </script>
    @endsection