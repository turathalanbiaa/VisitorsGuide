<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{trans("words.app_name")}}</title>

    <!-- StyleSheet -->
    <link href="{{asset("css/app.css")}}" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Script -->
    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <style>
        body {
            text-align: right;
            background-color: #d3d3d38f;
            margin: auto;
            max-width: 768px;
        }
        .cover {
            width: calc(100% - 20px);
            max-width: calc(768px - 20px);
            height: 130px;
            background-color: #40e0d0;
            margin-left: 20px;
        }
        .cover-skew {
            width: calc(100%);
            height: 165px;
            background-color: #40e0d0;
            border-radius: 0 0 0 25px;
            transform: skew(0deg, -5deg);
            padding-top: 32px;
            margin-top: -32px;
            -webkit-box-sizing: content-box;
               -moz-box-sizing: content-box;
                    box-sizing: content-box;
            -webkit-box-shadow: 0 0 7px 1px #17a2b8c7;
               -moz-box-shadow:0 0 7px 1px #17a2b8c7;
                    box-shadow: 0 0 7px 1px #17a2b8c7;
        }
        .demo {
            position: absolute;
            top: 0;
            width: calc(100% - 20px);
            max-width: calc(768px - 20px);
            height: 150px;
            background-color: transparent;
            padding-top: 16px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .demo-img {
            width: 90px;
            height: 90px;
            background-color: var(--white);
            border-radius: 100% 100%;
            padding: 5px;
            box-shadow: 0 0 7px 1px #6c757db5;
        }
        .demo-img>img {
            width: 100%;
            height: 100%;
        }
        .demo-btn:active,
        .demo-btn:hover,
        .demo-btn:focus,
        .demo-btn:visited {
            text-decoration: none!important;
        }
        .content {
            position: absolute;
            bottom: 12px;
            width: 100%;
            max-width: 768px;
            height: calc(100% - 220px);
            margin-top: 110px;
        }
        .content-right {
            width: 100%;
            height: 100%;
        }
        .fade-text {
            position: relative;
            height: 5em;
        }
        .fade-text:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2em;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5),
            rgba(255, 255, 255, 0.6),
            rgba(255, 255, 255, 0.9),
            rgba(255, 255, 255, 1)
            100%);
        }
        .module-text {
            margin: 0 0 1em 0;
            overflow: hidden;
            padding-bottom: 17px;
        }

        .content-left {
            max-width: 250px;
            height: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
        }
        .content-left .col-special {
            width: 100%;
            padding: 8px 24px;
        }
        .col-special img {
            width: 100%;
            height: 100%;
            padding: 10px;
            border-radius: 100% 100%;
        }
    </style>
</head>
<body>
<div class="cover">
    <div class="cover-skew"></div>
    <div class="demo">
        <div class="w-auto h-100 p-3 d-flex flex-column">
            <div class="demo-img">
                <img src="{{asset("img/logo.png")}}" alt="logo">
                <p class="text-center text-white m-0 pt-2">{{trans("words.app_name")}}</p>
            </div>
        </div>

        <div class="w-auto h-100 p-3 d-flex flex-column">
            <a class="text-white font-weight-bold demo-btn" href="/login" style="margin-top: 20px!important;">
                <span>{{trans("words.main_btn_login_text")}}</span>
                <i class="fa fa-user-circle text-white align-middle" style="font-size: 40px;"></i>
            </a>
            <a class="text-secondary font-weight-bold demo-btn" data-toggle="modal" data-target="#select-language-modal" style="margin-top: 70px!important;">
                <span>{{trans("words.main_text_language")}}</span>
                <i class="fa fa-globe text-secondary align-middle"></i>
            </a>
        </div>
    </div>
</div>

<div class="content d-flex flex-row">
    <div class="content-right py-2">
        {{--<div class="d-flex flex-row justify-content-center">--}}
            {{--<img class="ml-3" src="https://w.bookcdn.com/weather/picture/30_328251_1_22_17bc9c_250_13a085_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=762&anc_id=5824"  alt="booked.net"/>--}}
        {{--</div>--}}

        <div class="card rounded ml-3 mt-3">
            <div class="p-3">
                <h5>زيارة النبي الأكرم (ص)</h5>
                <p class="module-text fade-text">أَشْهَدُ أَنْ لا إِلـهَ إِلّا اللهُ وَحْدَهُ لا شَريكَ لَهُ، وَأَشْهَدُ أَنَّ مُحَمَّداً عَبْدُهُ وَرَسُولُهُ، وَأَشْهَدُ أَنَّهُ سَيِّدُ الأَوَّلِينَ وَالآخِرينَ، وَأَنَّهُ سَيِّدُ الأَنْبِياءِ وَالْمُرْسَلِينَ، اَللّـهُمَّ صَلِّ عَلَيْهِ وَعَلى أَهْلِ بَيْتِهِ الأَئِمَّةِ الطَّيِّبينَ، ثمّ قل:
                    اَلسَّلامُ عَلَيْكَ يا رَسُولَ اللهِ، اَلسَّلامُ عَلَيْكَ يا خَليلَ اللهِ، اَلسَّلامُ عَلَيْكَ يا نَبِيَّ اللهِ، اَلسَّلامُ عَلَيْكَ يا صَفِيَّ اللهِ، اَلسَّلامُ عَلَيْكَ يا رَحْمَةَ اللهِ، اَلسَّلامُ عَلَيْكَ يا خِيَرَةَ اللهِ، اَلسَّلامُ عَلَيْكَ يا حَبِيبَ اللهِ، اَلسَّلامُ عَلَيْكَ يا نَجِيبَ اللهِ، اَلسَّلامُ عَلَيْكَ يا خاتَمَ النَّبِيّينَ، اَلسَّلامُ عَلَيْكَ يا سَيِّدَ الْمُرْسَلينَ، اَلسَّلامُ عَلَيْكَ يا قائِماً بِالْقِسْطِ، اَلسَّلامُ عَلَيْكَ يا فاتِحَ الْخَيْرِ، اَلسَّلامُ عَلَيْكَ يا مَعْدِنَ الْوَحْيِ وَالتَّنْزيلِ، اَلسَّلامُ عَلَيْكَ يا مُبَلِّغاً عَنِ اللهِ، اَلسَّلامُ عَلَيْكَ أَيُّهَا السِّراجُ الْمُنيرُ، اَلسَّلامُ عَلَيْكَ يا مُبَشِّرُ، اَلسَّلامُ عَلَيْكَ يا نَذيرُ، اَلسَّلامُ عَلَيْكَ يا مُنْذِرُ، اَلسَّلامُ عَلَيْكَ يا نُورَ اللهِ الَّذي يُسْتَضاءُ بِهِ، اَلسَّلامُ عَلَيْكَ وَعَلى أَهْلِ بَيْتِكَ الطَّيِّبينَ الطّاهِرينَ الْهادِينَ الْمَهْدِيِّينَ، اَلسَّلامُ عَلَيْكَ وَعَلى جَدِّكَ عَبْدِ المُطَّلِبِ، وَعَلى أَبيكَ عِبْدِ اللهِ، اَلسَّلامُ عَلى أُمِّكَ آمِنَةَ بِنْتِ وَهَب، اَلسَّلامُ عَلى عَمِّكَ حَمْزَةَ سَيِّدِ الشُّهَداءِ، اَلسَّلاُمُ عَلى عَمِّكَ الْعَبّاسِ بْنِ عَبْدِ المُطَّلِبِ، اَلسَّلامُ عَلى عَمِّكَ وَكَفيلِكَ أبي طالِب، اَلسَّلامُ عَلى ابْنِ عَمِّكَ جَعْفَرٍ الطَّيّارِ في جِنانِ الْخُلْدِ، اَلسَّلامُ عَلَيْكَ يا مُحَمَّدُ اَلسَّلامُ عَلَيْكَ يا أَحْمَدُ اَلسَّلامُ عَلَيْكَ يا حُجَّةَ اللهِ عَلَى الأَوَّلِينَ وَالآخِرينَ وَالسّابِقَ اِلى طاعَةِ رَبِّ الْعالَمينَ، وَالْمُهَيْمِنَ عَلى رُسُلِهِ، وَالْخاتَمَ لأَنْبِيائِهِ، وَالشّاهِدَ عَلى خَلْقِهِ، وَالشَّفِيعَ اِلَيْهِ، وَالْمَكينَ لَدَيْهِ، وَالْمُطاعَ في مَلَكُوتِهِ، الأَحْمَدَ مِنَ الأَوْصافِ، المُحَمَّدَ لِسائِرِ الأَشْرافِ، الْكَريمَ عِنْدَ الرَّبِّ، وَالْمُكَلَّمَ مِنْ وَراءِ الْحُجُبِ، الْفائِزَ بِالسِّباقِ، وَالْفائِتَ عَنِ اللِّحاقِ، تَسْليمَ عارِفٍ بِحَقِّكَ مُعْتَرِفٍ بِالتَّقْصيرِ في قِيامِهِ بِواجِبِكَ، غَيْرِ مُنْكَرٍ مَا انْتَهى اِلَيْهِ مِنْ فَضْلِكَ، مُوقِنٍ بِالْمَزِيداتِ مِنْ رَبِّكَ، مُؤْمِنٍ بِالْكِتابِ الْمُنْزَلِ عَلَيْكَ، مُحَلِّلٍ حَلالَكَ، مُحَرِّمٍ حَرامَكَ، أَشْهَدُ يا رَسُولَ اللهِ مَعَ كُلِّ شاهِدٍ، وَأَتَحَمَّلُها عَنْ كُلِّ جاحِدٍ، أَنَّكَ قَدْ بَلَّغْتَ رِسالاتِ رَبِّكَ، وَنَصَحْتَ لأُمَّتِكَ، وَجاهَدْتَ في سَبيلِ رَبِّكَ، وصَدَعْتَ بِأَمْرِهِ، وَاحْتَمَلْتَ الأَذى في جَنْبِهِ، وَدَعَوْتَ اِلى سَبيلِهِ بِالْحِكْمَةِ وَالْمَوْعِظَةِ الْحَسَنَةِ الْجَميلَةِ، وَأَدَّيْتَ الْحَقَّ الَّذي كانَ عَلَيْكَ، وَأَنَّكَ قَدْ رَؤُفْتَ بِالْمُؤْمِنينَ، وَغَلُظْتَ عَلَى الْكافِرينَ، وَعَبَدْتَ اللهَ مُخْلِصاً حَتّى أَتاكَ الْيَقينُ، فَبَلَغَ اللهُ بِكَ أَشْرَفَ مَحَلِّ الْمُكَرَّمينَ، وَأَعْلى مَنازِلِ الْمُقَرَّبِينَ، وَأَرْفَعَ دَرَجاتِ الْمُرْسَلِينَ، حَيْثُ لا يَلْحَقُكَ لاحِقٌ، وَلا يَفُوقُكَ فائِقٌ، وَلا يَسْبِقُكَ سابِقٌ، وَلا يَطْمَعُ في إِدْراكِكَ طامِعٌ، اَلْحَمْدُ للهِ الَّذي اسْتَنْقَذَنا بِكَ مِنَ الْهَلَكَةِ، وَهَدانا بِكَ مِنَ الضَّلالَةِ، وَنوَّرَنا بِكَ مِنَ الظُّلْمَةِ، فَجَزاكَ اللهُ يا رَسُولَ اللهِ مِنْ مَبْعُوثٍ أَفْضَلَ ما جَازَى نَبِيَّاً عَنْ أُمَّتِهِ، وَرَسُولاً عَمَّنْ أُرْسِلَ اِلَيْهِ، بَأَبِي أَنْتَ وَأُمِّي يا رَسُولَ اللهِ، زُرْتُكَ عارِفاً بِحَقِّكَ، مُقِرّاً بِفَضْلِكَ، مُسْتَبْصِراً بِضَلالَةِ مَنْ خالَفَكَ وَخالَفَ أَهْلَ بَيْتِكَ، عارِفاً بِالْهُدَى الَّذي أَنْتَ عَلَيْهِ، بِأَبِي أَنْتَ وَأُمِّي وَنَفْسِي وَأَهْلِي وَمَالِي وَوَلَدِي، أَنَا أُصَلّي عَلَيْكَ كَما صَلَّى اللهُ عَلَيْكَ، وَصَلّى عَلَيْكَ مَلائِكَتُهُ وَأَنْبِياؤُهُ وَرُسُلُهُ، صَلاةً مُتَتابِعَةً وافِرَةً مُتَواصِلَةً، لاَ انْقِطاعَ لَها وَلا أَمَدَ وَلا أَجَلَ، صَلَّى اللهُ عَلَيْكَ وَعَلى أَهْلِ بَيْتِكَ الطَّيِّبِينَ الطّاهِرينَ كَما أَنْتُمْ أَهْلُهُ. ثمّ ابسط كفّيك وقل:
                    اَللّـهُمَّ اجْعَلْ جَوامِعَ صَلَواتِكَ، وَنَوامِيَ بَرَكاتِكَ، وَفَواضِلَ خَيْراتِكَ، وَشَرائِفَ تَحِيّاتِكَ وَتَسْليماتِكَ وَكَراماتِكَ وَرَحْماتِكَ، وَصَلَواتِ مَلائِكَتِكَ الْمُقَرَّبينَ، وَأَنْبِيائِكَ الْمُرْسَلِينَ، وَأَئِمَّتِكَ الْمُنْتَجَبِينَ، وَعِبادِكَ الصّالِحِينَ، وَأَهْلِ السَّماواتِ وَالأَرَضينَ، وَمَنْ سَبَّحَ لَكَ يا رَبَّ الْعالَمينَ مِنَ الأَوَّلينَ وَالآخِرينَ، عَلى مُحَمَّدٍ عَبْدِكَ وَرَسُولِكَ وَشاهِدِكَ وَنَبِيِّكَ وَنَذيرِكَ وَأَمينِكَ وَمَكينِكَ وَنَجِيِّكَ وَنَجيبِكَ وَحَبيبِكَ وَخَليلِكَ وَصَفيِّكَ وَصَفْوَتِكَ وَخاصَّتِكَ وَخالِصَتِكَ وَرَحْمَتِكَ وَخَيْرِ خِيَرَتِكَ مِنْ خَلْقِكَ، نَبِيِّ الرَّحْمَةِ، وَخازِنِ الْمَغْفِرَةِ، وَقائِدِ الْخَيْرِ وَالْبَرَكَةِ، وَمُنْقِذِ الْعِبادِ مِنَ الْهَلَكَةِ بِإِذْنِكَ، وَداعيهِمْ اِلى دينِكَ الْقَيِّمِ بِأَمْرِكَ، أَوَّلِ النَّبيِّينَ مِيثَاقاً، وَآخِرِهِمْ مَبْعَثاً، الَّذي غَمَسْتَهُ في بَحْرِ الْفَضِيلَةِ وَالْمَنْزِلَةِ الْجَلِيلَةِ، وَالدَّرَجَةِ الرَّفِيعَةِ، وَالْمَرْتَبَةِ الْخَطِيرَةِ، وَأَوْدَعْتَهُ الأَصْلابَ الطّاهِرَةَ، وَنَقَلْتَهُ مِنْها اِلَى الأَرْحامِ الْمُطَهَّرَةِ، لُطْفاً مِنْكَ لَهُ وَتَحَنُّناً مِنْكَ عَلَيْهِ، إِذْ وَكَّلْتَ لِصَوْنِهِ وَحِراسَتِهِ وَحِفْظِهِ وَحِياطَتِهِ مِنْ قُدْرَتِكَ عَيْناً عاصِمَةً، حَجَبْتَ بِها عَنْهُ مَدانِسَ الْعَهْرِ، وَمَعائِبَ السِّفاحِ، حَتّى رَفَعْتَ بِهِ نَواظِرَ الْعِبادِ، وَأَحْيَيْتَ بِهِ مَيْتَ الْبِلادِ، بِأَنْ كَشَفْتَ عَنْ نُورِ وِلادَتِهِ ظُلَمَ الأَسْتارِ، وَأَلْبَسْتَ حَرَمَكَ بِهِ حُلَلَ الأَنْوارِ، اَللّـهُمَّ فَكَما خَصَصْتَهُ بِشَرَفِ هذِهِ الْمَرْتَبَةِ الْكَريمَةِ وَذُخْرِ هذِهِ الْمَنْقَبَةِ العَظِيْمَة، صَلِّ عَلَيْهِ كَما وَفى بِعَهْدِكَ، وَبَلَّغَ رِسالاتِكَ، وَقاتَلَ أَهْلَ الْجُحُودِ عَلى تَوْحيدِكَ، وَقَطَعَ رَحِمَ الْكُفْرِ في إِعْزازِ دينِكَ، وَلَبِسَ ثَوْبَ الْبَلْوى في مُجَاهَدَةِ أَعْدائِكَ، وَأَوْجَبْتَ لَهُ بِكُلِّ أَذَىً مَسَّهُ أَوْ كَيْدٍ أَحَسَّ بِهِ مِنَ الْفِئَةِ الَّتي حاوَلَتْ قَتْلَهُ فَضيلَةً تَفُوقُ الْفَضائِلَ، وَيَمْلِكُ بِهَا الْجَزيلَ مِنْ نَوالِكَ، وَقَدْ أَسَرَّ الْحَسْرَةَ وَأَخْفَى الزَّفْرَةَ وَتَجَرَّعَ الْغُصَّةَ، وَلَمْ يَتَخَطَّ ما مَثَّلَ لَهُ وَحْيُكَ، اَللّـهُمَّ صَلِّ عَلَيْهِ وَعَلى أَهْلِ بَيْتِهِ صَلاةً تَرْضاها لَهُمْ، وَبَلِّغْهُمْ مِنّا تَحِيَّةً كَثيرَةً وَسَلاماً، وَآتِنا مِنْ لَدُنْكَ في مُوالاتِهِمْ فَضْلاً وَإِحْساناً وَرَحْمَةً وَغُفْراناً، إِنَّكَ ذُو الْفَضْلِ الْعَظيمِ..</p>
                <a href="/adeua-and-zuarat" class="btn btn-secondary btn-sm rounded read-more" >{{trans("words.main_text_read")}}</a>
            </div>

            <audio controls="controls" controlsList="nodownload" class="audio w-100 p-1">
                <source src="https://dwn.alkafeel.net/zyarat/alnabi.mp3" type="audio/mpeg">
            </audio>
        </div>
    </div>
    <div class="content-left">
        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <a href="/road-guide">
                    <img src="{{asset("img/1.png")}}" alt="logo">
                </a>
            </div>
            <p class="text-center" >{{trans("words.main_road_guide_title")}}</p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <a href="/majales">
                    <img src="{{asset("img/2.png")}}" alt="logo">
                </a>
            </div>
            <p class="text-center" >{{trans("words.main_majales_guide_title")}}</p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <a href="/lost">
                    <img src="{{asset("img/3.png")}}" alt="logo">
                </a>
            </div>
            <p class="text-center" >{{trans("words.main_centers_title")}}</p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <a href="/reception">
                    <img src="{{asset("img/4.png")}}" alt="logo">
                </a>
            </div>
            <p class="text-center" >{{trans("words.main_visitor_reception_title")}}</p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <a href="/adeua-and-zuarat">
                    <img src="{{asset("img/5.png")}}" alt="logo">
                </a>
            </div>
            <p class="text-center" >{{trans("words.main_adeua_and_zuarat_title")}}</p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <a href="/visitor-feqh">
                    <img src="{{asset("img/6.png")}}" alt="logo">
                </a>
            </div>
            <p class="text-center" >{{trans("words.main_visitor_feqh_title")}}</p>
        </div>

        <div class="col-special">
            <div class="bg-white border rounded shadow-sm">
                <a href="/majales/events-gallery">
                    <img src="{{asset("img/7.png")}}" alt="logo">
                </a>
            </div>
            <p class="text-center" >{{trans("words.main_majales_guide_title")}}</p>
        </div>
    </div>
</div>

@include("layout.select_language")
</body>
</html>
