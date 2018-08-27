@extends('layout.secondary_layout')

@section('top-title')
    <h1>دليل الزيارات والادعية</h1>

@endsection

@section('content')

    <div class="container prayerAndVisits">
        <div class="row justify-content-center">
            <div class="col-md-8 prayer-today mt-5">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <img src="{{asset('١.jpg')}}" style="width: 100%">
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="prayer-today-content">
                                        <div class="header mt-3">
                                            <h2 class="text-center">ادعية الايام</h2>
                                        </div>
                                        <div class="content">
                                            <p>بسم الله الرحمن الرحيم

                                                1 ـ أَلْحَمْدُ لِلّهِ الَّذِي أَذْهَبَ اللَّيْلَ مُظْلِمَاً بِقُدْرَتِهِ، وَجآءَ بِالنَّهارِ مُبْصِراً بِرَحْمَتِهِ، وَكَسانِي ضِيآءَهُ وَآتانِي نِعْمَتَهُ.

                                                2 ـ أَللَّهُمَّ فَكَما أَبْقَيْتَنِي لَهُ فَأَبْقِنِي لاَِمْثالِهِ، وَصَلِّ عَلَى النَّبِيِّ مُحَمَّد وَآلِهِ، وَلا تَفْجَعْنِي فِيهِ وَفِي غَيْرِهِ مِنَ اللَّيالِي وَالاَيَّامِ بِارْتِكابِ الْمَحارِمِ، وَاكْتِسابِ الْمَاثِمِ، وَارْزُقْنِي خَيْرَهُ، وَخَيْرَ ما فِيهِ، وَخَيْرَ ما بَعْدَهُ، وَاصْرِفْ عَنِّي شَرَّهُ، وَشَرَّ ما فِيهِ، وَشَرَّ ما بَعْدَهُ.

                                                3 ـ أَللَّهُمَّ إنِّي بِذِمَّةِ الاِسْلامِ أَتَوَسَّلُ إلَيْكَ، وَبِحُرْمَةِ الْقُرْآنِ أَعْتَمِدُ عَلَيْكَ، وَبِمُحَمَّد الْمُصْطَفى صَلَّى اللَّهُ عَلَيْهِ وآلِهِ أَسْتَشْفِعُ لَدَيْكَ، فَاعْرِفِ اللَّهُمَّ ذِمَّتِي الَّتِي رَجَوْتُ بِها قَضآءَ حاجَتِي، يا أَرْحَمَ الرَّاحِمِينَ.

                                                4 ـ أَللَّهُمَّ اقْضِ لِي فِي الخَمِيسِ خَمْساً لا يَتَّسِعُ لَها إلاَّ كَرَمُكَ وَلا يُطِيقُها إلاَّ نِعَمُكَ: سَلامَةً أَقْوى بِها عَلَى طاعَتِكَ وَعِبادَةً أَسْتَحِقُّ بِها جَزِيلَ مَثُوبَتِكَ، وَسَعَةً فِي الْحالِ مِنَ الرِّزْقِ الْحَلالِ، وَأَنْ تُؤْمِنَنِي فِي مَواقِفِ الْخَوْفِ بِأَمْنِكَ، وَتَجْعَلَنِي مِنْ طَوارِقِ الْهُمُومِ وَالْغُمُومِ فِي حِصْنِكَ، صَلِّ عَلى مُحَمَّد وَآلِهِ، وَاجْعَل تَوَسُّلِي بِهِ شافِعَاً يَوْمَ الْقِيامَةِ نافِعاً، إنَّكَ أَنْتَ أَرْحَمُ الرَّاحِمِينَ.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="prayer-today-content">
                                        <div class="header mt-3">
                                            <h2 class="text-center">ادعية الايام</h2>
                                        </div>
                                        <div class="content">
                                            <p>بسم الله الرحمن الرحيم

                                                1 ـ أَلْحَمْدُ لِلّهِ الَّذِي أَذْهَبَ اللَّيْلَ مُظْلِمَاً بِقُدْرَتِهِ، وَجآءَ بِالنَّهارِ مُبْصِراً بِرَحْمَتِهِ، وَكَسانِي ضِيآءَهُ وَآتانِي نِعْمَتَهُ.

                                                2 ـ أَللَّهُمَّ فَكَما أَبْقَيْتَنِي لَهُ فَأَبْقِنِي لاَِمْثالِهِ، وَصَلِّ عَلَى النَّبِيِّ مُحَمَّد وَآلِهِ، وَلا تَفْجَعْنِي فِيهِ وَفِي غَيْرِهِ مِنَ اللَّيالِي وَالاَيَّامِ بِارْتِكابِ الْمَحارِمِ، وَاكْتِسابِ الْمَاثِمِ، وَارْزُقْنِي خَيْرَهُ، وَخَيْرَ ما فِيهِ، وَخَيْرَ ما بَعْدَهُ، وَاصْرِفْ عَنِّي شَرَّهُ، وَشَرَّ ما فِيهِ، وَشَرَّ ما بَعْدَهُ.

                                                3 ـ أَللَّهُمَّ إنِّي بِذِمَّةِ الاِسْلامِ أَتَوَسَّلُ إلَيْكَ، وَبِحُرْمَةِ الْقُرْآنِ أَعْتَمِدُ عَلَيْكَ، وَبِمُحَمَّد الْمُصْطَفى صَلَّى اللَّهُ عَلَيْهِ وآلِهِ أَسْتَشْفِعُ لَدَيْكَ، فَاعْرِفِ اللَّهُمَّ ذِمَّتِي الَّتِي رَجَوْتُ بِها قَضآءَ حاجَتِي، يا أَرْحَمَ الرَّاحِمِينَ.

                                                4 ـ أَللَّهُمَّ اقْضِ لِي فِي الخَمِيسِ خَمْساً لا يَتَّسِعُ لَها إلاَّ كَرَمُكَ وَلا يُطِيقُها إلاَّ نِعَمُكَ: سَلامَةً أَقْوى بِها عَلَى طاعَتِكَ وَعِبادَةً أَسْتَحِقُّ بِها جَزِيلَ مَثُوبَتِكَ، وَسَعَةً فِي الْحالِ مِنَ الرِّزْقِ الْحَلالِ، وَأَنْ تُؤْمِنَنِي فِي مَواقِفِ الْخَوْفِ بِأَمْنِكَ، وَتَجْعَلَنِي مِنْ طَوارِقِ الْهُمُومِ وَالْغُمُومِ فِي حِصْنِكَ، صَلِّ عَلى مُحَمَّد وَآلِهِ، وَاجْعَل تَوَسُّلِي بِهِ شافِعَاً يَوْمَ الْقِيامَةِ نافِعاً، إنَّكَ أَنْتَ أَرْحَمُ الرَّاحِمِينَ.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="" style="float: left" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" style="background-color: #0c5460" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="" style="float: right" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" style="background-color: #0c5460" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-3 p-0 gallery-images" id="gallery-images" data-toggle="modal" data-target="#modal-dialog-centered">
                <img src="1.jpg" class="w-100 h-100 image">
            </div>
            <div class="col-md-3 p-0 gallery-images" id="gallery-images">
                <img src="2.jpg" class="w-100 h-100 image">
            </div>
            <div class="col-md-3 p-0 gallery-images" id="gallery-images">
                <img src="3.jpg" class="w-100 h-100 image">
            </div>
            <div class="col-md-3 p-0 gallery-images" id="gallery-images">
                <img src="4.jpg" class="w-100 h-100 image">
            </div>
            <div class="col-md-3 p-0 gallery-images" id="gallery-images">
                <img src="5.jpg" class="w-100 h-100 image">
            </div>
            <div class="col-md-3 p-0 gallery-images" id="gallery-images">
                <img src="6.jpg" class="w-100 h-100 image">
            </div>
            <div class="col-md-3 p-0 gallery-images" id="gallery-images">
                <img src="7.jpg" class="w-100 h-100 image">
            </div>
            <div class="col-md-3 p-0 gallery-images" id="gallery-images" style="position: relative" >
                <img src="8.jpg" class="w-100 h-100 image" style="position: relative">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-3 p-0">
                <div style="position: relative">
                    <img class="h-100 w-100 p-0" src="{{asset('1.jpg')}}">
                </div>
                <div class="w-100 h-100 col justify-content-center" style="opacity: 0.8; position: absolute; top: 0; background-color: #1b1e21; text-align: center">
                    <i class="fas fa-play" style="font-size: 66px; color: #1c7430"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-dialog-centered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <img src="8.jpg" class="w-100 h-100 image" style="position: relative">
        </div>
    </div>
    <script>
            var getHeight = document.getElementById('gallery-img').clientHeight;
            console.log(getHeight);
            getHeight = getHeight + 'px';
            $('.gallery-img').css('height',getHeight)

    </script>
@endsection