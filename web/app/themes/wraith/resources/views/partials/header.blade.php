@if( function_exists('get_field') )
  @php
  $logo = get_field('logo', 'option');
  $header_background = get_field('header_background');
  $logo_retina = get_field('logo_retina', 'option');
  $icon = get_field('icon', 'option');
  $icon_retina = get_field('icon_retina', 'option');
  $brand_phone_link = get_field('brand_phone_link', 'option');
  $brand_phone_label = get_field('brand_phone_label', 'option');
  $brand_phone_alt_link = get_field('brand_phone_alt_link', 'option');
  $brand_phone_alt_label = get_field('brand_phone_alt_label', 'option');
  $brand_fax = get_field('brand_fax', 'option');
  $brand_email = get_field('brand_email', 'option');
  $social_facebook = get_field('social_facebook', 'option');
  $social_twitter = get_field('social_twitter', 'option');
  $social_instagram = get_field('social_instagram', 'option');
  $social_youtube = get_field('social_youtube', 'option');
  $social_linkedin = get_field('social_linkedin', 'option');
  $social_pinterest = get_field('social_pinterest', 'option');
  @endphp
  @if (have_rows('locations', 'option'))
  @endif
@endif
<header id="header-main" class="banner fixed z-40 top-0 left-0 right-0 {{ $header_background ? 'is-scrolled' : null}} w-full">
  <div class="header-bg ">
    <div class="flex items-center header-padding justify-between lg:py-4 py-0 2xl:px-20 lg:px-4">
      <div class="hidden lg:block">
        <a class="brand border-0" href="{{ home_url('/') }}">
          @if( $logo )
          <img src="{!! $logo['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $logo_retina ? ' srcset="' . $logo['url'] . ' 1x, ' . $logo_retina['url'] . ' 2x"' : null !!} width="auto" height="50" class="hidden logo-scroll object-contain lg:inline-block xl:w-[250px] xl:h-[110px] lg:w-[210px] lg:h-[90px] w-[100px] h-[50px]">
          @else
          {{ get_bloginfo('name', 'display') }}
          @endif
          @if( $icon )
          <img src="{!! $icon['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $icon_retina ? ' srcset="' . $icon['url'] . ' 1x, ' . $icon_retina['url'] . ' 2x"' : null !!} width="32" height="32" class="lg:hidden">
          @else
          {{ get_bloginfo('name', 'display') }}
          @endif
        </a>
      </div>
  
      <div class="w-full">
        <div id="toolbar" class="hidden lg:block">
            <div class="container ml-auto">
              <div class="flex justify-end items-center">
                <a href="https://www.feefo.com/en-GB/reviews/starglaze-windows?displayFeedbackType=SERVICE&timeFrame=YEAR" target="_blank" class="hover:border-none xl:block hidden">
                  <div class="flex justify-center items-center mr-4">
                    <img src="/app/uploads/2023/08/fefo.png" alt="" class="w-auto h-[1rem] mr-1">
                    <div class="xl:block hidden">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="74" height="22" viewBox="0 0 74 22">
                        <defs>
                          <clipPath id="clip-path">
                            <rect id="Rectangle_528" data-name="Rectangle 528" width="11" height="22" transform="translate(-0.05 -0.459)" fill="#fff" stroke="#707070" stroke-width="1"/>
                          </clipPath>
                        </defs>
                        <g id="Polygon_1" data-name="Polygon 1" transform="translate(0 4)" fill="#ffde37">
                          <path d="M 3.750656127929688 12.79834365844727 C 3.750657558441162 12.79833984375 3.750658750534058 12.79833602905273 3.750659942626953 12.79833126068115 L 4.843599796295166 9.185561180114746 C 4.964620113372803 8.785541534423828 4.821509838104248 8.347991943359375 4.487500190734863 8.09679126739502 L 1.448590040206909 5.811341762542725 C 1.44858729839325 5.811339378356934 1.448584675788879 5.811337471008301 1.44858193397522 5.811335563659668 C 1.448582291603088 5.811334609985352 1.448582768440247 5.811333179473877 1.448583126068115 5.811332225799561 C 1.448588728904724 5.811331748962402 1.448594450950623 5.811331748962402 1.448600053787231 5.811331748962402 L 5.295569896697998 5.7148118019104 C 5.711060047149658 5.704371452331543 6.070509910583496 5.444971561431885 6.211329936981201 5.053961753845215 L 7.499780178070068 1.476271629333496 L 7.500219821929932 1.476271629333496 L 8.788669586181641 5.053961753845215 C 8.929499626159668 5.444991588592529 9.288960456848145 5.704381465911865 9.704440116882324 5.714801788330078 L 13.55142021179199 5.811331748962402 C 13.55141830444336 5.811331748962402 13.55141830444336 5.811332225799561 13.55141830444336 5.811332702636719 L 10.51249980926514 8.0968017578125 C 10.17848968505859 8.347991943359375 10.03538036346436 8.785541534423828 10.15639972686768 9.185561180114746 L 11.24934005737305 12.79833126068115 L 8.059679985046387 10.64415168762207 C 7.893760204315186 10.53208160400391 7.700220108032227 10.47285175323486 7.5 10.47285175323486 C 7.299779891967773 10.47285175323486 7.106239795684814 10.53208160400391 6.940320014953613 10.64415168762207 L 3.750659942626953 12.79834175109863 C 3.750658750534058 12.79834270477295 3.750657558441162 12.79834365844727 3.750656127929688 12.79834365844727 Z" stroke="none"/>
                          <path d="M 7.499999046325684 2.951329231262207 L 6.681750297546387 5.223381996154785 C 6.47052001953125 5.809901237487793 5.931349754333496 6.199001312255859 5.308110237121582 6.214661598205566 L 2.897180557250977 6.275151252746582 L 4.788020133972168 7.697191715240479 C 5.289050102233887 8.073991775512695 5.50370979309082 8.730311393737793 5.322179794311523 9.330341339111328 L 4.636562347412109 11.59667778015137 L 6.660449981689453 10.229811668396 C 6.909339904785156 10.06171226501465 7.199649810791016 9.972851753234863 7.5 9.972851753234863 C 7.800320148468018 9.972851753234863 8.090610504150391 10.06170177459717 8.339519500732422 10.22979164123535 L 10.36343383789062 11.59667491912842 L 9.677820205688477 9.330350875854492 C 9.49629020690918 8.730311393737793 9.710949897766113 8.073991775512695 10.21196937561035 7.697191715240479 L 12.10282611846924 6.275148391723633 L 9.691850662231445 6.214652061462402 C 9.068649291992188 6.199001312255859 8.52947998046875 5.809901237487793 8.318240165710449 5.223371505737305 L 7.499999046325684 2.951329231262207 M 7.5 0.9756565093994141 C 7.695525169372559 0.9756565093994141 7.891049861907959 1.085851669311523 7.970419883728027 1.306241989135742 L 9.259090423583984 4.884541511535645 C 9.328969955444336 5.078571319580078 9.510809898376465 5.20979118347168 9.716970443725586 5.214971542358398 L 13.56396007537842 5.311491966247559 C 14.03765964508057 5.323381423950195 14.23064994812012 5.926131248474121 13.8519401550293 6.210941314697266 L 10.81303024291992 8.496401786804199 C 10.64533042907715 8.62252140045166 10.57422065734863 8.839941024780273 10.63498020172119 9.040781021118164 L 11.72792053222656 12.65355110168457 C 11.86417961120605 13.10396099090576 11.35947036743164 13.4760627746582 10.9694995880127 13.21269130706787 L 7.779839992523193 11.05850124359131 C 7.6107497215271 10.94430160522461 7.3892502784729 10.94430160522461 7.220160007476807 11.05850124359131 L 4.030500411987305 13.21269130706787 C 3.640530586242676 13.47606086730957 3.135820388793945 13.10396194458008 3.272080421447754 12.65355110168457 L 4.365019798278809 9.040781021118164 C 4.425780296325684 8.839941024780273 4.354669570922852 8.62252140045166 4.186969757080078 8.496401786804199 L 1.148059844970703 6.210941314697266 C 0.7693500518798828 5.926131248474121 0.9623403549194336 5.323381423950195 1.436039924621582 5.311491966247559 L 5.283029556274414 5.214971542358398 C 5.489190101623535 5.20979118347168 5.671030044555664 5.078571319580078 5.740909576416016 4.884541511535645 L 7.029580116271973 1.306241989135742 C 7.108950138092041 1.085851669311523 7.304474830627441 0.9756565093994141 7.5 0.9756565093994141 Z" stroke="none" fill="#ffde37"/>
                        </g>
                        <g id="Polygon_2" data-name="Polygon 2" transform="translate(15 4)" fill="#ffde37">
                          <path d="M 3.545730113983154 12.75187206268311 L 4.559860229492188 9.160181999206543 C 4.668920040130615 8.773902893066406 4.537449836730957 8.361602783203125 4.224929809570312 8.109772682189941 L 1.371860027313232 5.810832500457764 C 1.371858358383179 5.810831069946289 1.371856689453125 5.810829639434814 1.371855020523071 5.810828685760498 C 1.371855735778809 5.810826301574707 1.371856331825256 5.810824394226074 1.371857047080994 5.810822486877441 C 1.37185800075531 5.810822486877441 1.371859073638916 5.810822486877441 1.371860027313232 5.810822486877441 L 4.914229869842529 5.715592384338379 C 5.33197021484375 5.704362392425537 5.702099800109863 5.430672645568848 5.835239887237549 5.034572601318359 L 7 1.569322466850281 L 8.164759635925293 5.034562587738037 C 8.297900199890137 5.430672645568848 8.66802978515625 5.704362392425537 9.085769653320312 5.715592384338379 L 12.62814044952393 5.810822486877441 C 12.62814044952393 5.810822486877441 12.62814140319824 5.810822486877441 12.62814235687256 5.810822486877441 C 12.62813854217529 5.810825824737549 12.62813377380371 5.810829162597656 12.62812995910645 5.810832500457764 L 9.775070190429688 8.109782218933105 C 9.462550163269043 8.361602783203125 9.331080436706543 8.773902893066406 9.440139770507812 9.160172462463379 L 10.454270362854 12.75187206268311 C 10.45426273345947 12.75185298919678 10.45426177978516 12.75185394287109 10.45425987243652 12.75185489654541 L 7.586219787597656 10.67653274536133 C 7.414589881896973 10.55232238769531 7.211870193481445 10.48667240142822 7 10.48667240142822 C 6.788129806518555 10.48667240142822 6.585410118103027 10.55232238769531 6.413770198822021 10.67653274536133 L 3.545730113983154 12.75187206268311 Z" stroke="none"/>
                          <path d="M 6.999999046325684 3.138650894165039 L 6.309179782867432 5.193872451782227 C 6.109469890594482 5.788042068481445 5.554280281066895 6.198562622070312 4.92765998840332 6.215412139892578 L 2.743719100952148 6.274124145507812 L 4.538640022277832 7.720442295074463 C 5.007430076599121 8.098182678222656 5.20464038848877 8.716642379760742 5.041040420532227 9.296042442321777 L 4.417693138122559 11.50373363494873 L 6.12060022354126 10.27150249481201 C 6.378069877624512 10.08516311645508 6.682159900665283 9.986672401428223 7 9.986672401428223 C 7.31781005859375 9.986672401428223 7.621890068054199 10.0851526260376 7.879340171813965 10.27145195007324 L 9.582311630249023 11.50373458862305 L 8.958959579467773 9.296042442321777 C 8.795360565185547 8.716642379760742 8.992569923400879 8.098182678222656 9.461349487304688 7.720442295074463 L 11.25627708435059 6.274123191833496 L 9.072330474853516 6.215412139892578 C 8.445720672607422 6.198562622070312 7.890530109405518 5.788042068481445 7.690810203552246 5.193872451782227 L 6.999999046325684 3.138650894165039 M 7 1.069317817687988 C 7.198797702789307 1.069317817687988 7.397594928741455 1.182882308959961 7.473939895629883 1.410012245178223 L 8.638700485229492 4.875262260437012 C 8.705550193786621 5.074142456054688 8.889459609985352 5.210132598876953 9.099209785461426 5.21577262878418 L 12.64157962799072 5.311002731323242 C 13.10647964477539 5.323502540588379 13.30399036407471 5.90836238861084 12.94186019897461 6.200162887573242 L 10.08878993988037 8.499113082885742 C 9.93278980255127 8.624813079833984 9.866889953613281 8.831502914428711 9.921329498291016 9.024312973022461 L 10.93546009063721 12.61600208282471 C 11.06427001953125 13.07219314575195 10.54518985748291 13.43482208251953 10.16115951538086 13.15694236755371 L 7.293109893798828 11.08160209655762 C 7.118200302124023 10.95503234863281 6.881799697875977 10.95503234863281 6.706890106201172 11.08160209655762 L 3.838839530944824 13.15694236755371 C 3.454813003540039 13.43483066558838 2.93572998046875 13.07219314575195 3.064539909362793 12.61600208282471 L 4.078669548034668 9.024312973022461 C 4.133110046386719 8.831502914428711 4.06721019744873 8.624813079833984 3.911210060119629 8.499113082885742 L 1.058139801025391 6.200162887573242 C 0.696009635925293 5.90836238861084 0.8935203552246094 5.323502540588379 1.358420372009277 5.311002731323242 L 4.900790214538574 5.21577262878418 C 5.110540390014648 5.210132598876953 5.294449806213379 5.074142456054688 5.361300468444824 4.875262260437012 L 6.526060104370117 1.410012245178223 C 6.602405071258545 1.182882308959961 6.801202297210693 1.069317817687988 7 1.069317817687988 Z" stroke="none" fill="#ffde37"/>
                        </g>
                        <g id="Polygon_3" data-name="Polygon 3" transform="translate(29 4)" fill="#ffde37">
                          <path d="M 3.956029891967773 12.83819198608398 L 5.126780033111572 9.210102081298828 C 5.261950016021729 8.791221618652344 5.111070156097412 8.339371681213379 4.751349925994873 8.085721969604492 L 1.526139974594116 5.811761856079102 L 5.676889896392822 5.71412181854248 C 6.083730220794678 5.704561710357666 6.440919876098633 5.452911853790283 6.586860179901123 5.073011875152588 L 7.999788761138916 1.394881844520569 L 8.000217437744141 1.394881844520569 L 9.413129806518555 5.073001861572266 C 9.559069633483887 5.452891826629639 9.916259765625 5.704541683197021 10.32310009002686 5.71412181854248 L 14.4738597869873 5.811761856079102 L 11.24866962432861 8.085721969604492 C 10.88893032073975 8.339351654052734 10.73805046081543 8.79121208190918 10.87322044372559 9.210102081298828 L 12.04397010803223 12.8381814956665 C 12.04395771026611 12.83815574645996 12.04395484924316 12.83815765380859 12.04395198822021 12.83816051483154 L 8.534939765930176 10.61641216278076 C 8.374659538269043 10.51493167877197 8.189689636230469 10.46130180358887 8 10.46130180358887 C 7.810309886932373 10.46130180358887 7.625339984893799 10.51493167877197 7.465069770812988 10.61640167236328 L 3.956029891967773 12.8381814956665 L 3.956029891967773 12.83819198608398 Z" stroke="none"/>
                          <path d="M 7.999999046325684 2.788650512695312 L 7.053609848022461 5.252311706542969 C 6.834690093994141 5.822172164916992 6.29889965057373 6.199651718139648 5.688650131225586 6.213981628417969 L 3.052275657653809 6.275999069213867 L 5.039440155029297 7.677071571350098 C 5.579050064086914 8.057531356811523 5.805379867553711 8.735311508178711 5.602620124816895 9.363651275634766 L 4.856327056884766 11.67634773254395 L 7.197609901428223 10.19395160675049 C 7.438010215759277 10.04175186157227 7.715470314025879 9.961301803588867 8 9.961301803588867 C 8.284530639648438 9.961301803588867 8.561989784240723 10.04175186157227 8.802419662475586 10.19396209716797 L 11.14366722106934 11.67634201049805 L 10.39737987518311 9.363651275634766 C 10.19462966918945 8.735321998596191 10.42094039916992 8.057552337646484 10.96055030822754 7.67708158493042 L 12.94772624969482 6.275999069213867 L 10.31132984161377 6.213981628417969 C 9.701069831848145 6.19962215423584 9.165300369262695 5.822141647338867 8.946390151977539 5.252291679382324 L 7.999999046325684 2.788650512695312 M 7.999996185302734 0.8943319320678711 C 8.192304611206055 0.8943319320678711 8.384614944458008 1.001232147216797 8.466750144958496 1.215031623840332 L 9.879879951477051 4.893701553344727 C 9.952560424804688 5.082891464233398 10.13225936889648 5.209491729736328 10.33486938476562 5.214262008666992 L 14.48562049865723 5.311902046203613 C 14.96747970581055 5.32323169708252 15.15590000152588 5.942662239074707 14.7619800567627 6.220401763916016 L 11.53677940368652 8.494361877441406 C 11.35791015625 8.620481491088867 11.28184986114502 8.848272323608398 11.34906005859375 9.056551933288574 L 12.51980972290039 12.68462181091309 C 12.6634693145752 13.12980175018311 12.17171859741211 13.51085186004639 11.7765007019043 13.26062202453613 L 8.26746940612793 11.03885173797607 C 8.104150772094727 10.93545150756836 7.89585018157959 10.93545150756836 7.732529640197754 11.03885173797607 L 4.22350025177002 13.26062202453613 C 3.828276634216309 13.5108528137207 3.336530685424805 13.12980175018311 3.480190277099609 12.68462181091309 L 4.65093994140625 9.056551933288574 C 4.71815013885498 8.848272323608398 4.64208984375 8.620481491088867 4.463210105895996 8.494361877441406 L 1.238019943237305 6.220401763916016 C 0.8440999984741211 5.942662239074707 1.032520294189453 5.3232421875 1.51438045501709 5.311902046203613 L 5.665129661560059 5.214262008666992 C 5.867739677429199 5.209502220153809 6.047439575195312 5.082891464233398 6.120120048522949 4.893701553344727 L 7.533249855041504 1.215031623840332 C 7.61538028717041 1.001232147216797 7.807687759399414 0.8943319320678711 7.999996185302734 0.8943319320678711 Z" stroke="none" fill="#ffde37"/>
                        </g>
                        <g id="Polygon_4" data-name="Polygon 4" transform="translate(45 4)" fill="#ffde37">
                          <path d="M 3.750656127929688 12.79834365844727 C 3.750657558441162 12.79833984375 3.750658750534058 12.79833602905273 3.750659942626953 12.79833126068115 L 4.843599796295166 9.185561180114746 C 4.964620113372803 8.785541534423828 4.821509838104248 8.347991943359375 4.487500190734863 8.09679126739502 L 1.448590040206909 5.811341762542725 C 1.44858729839325 5.811339378356934 1.448584675788879 5.811337471008301 1.44858193397522 5.811335563659668 C 1.448582291603088 5.811334609985352 1.448582768440247 5.811333179473877 1.448583126068115 5.811332225799561 C 1.448588728904724 5.811331748962402 1.448594450950623 5.811331748962402 1.448600053787231 5.811331748962402 L 5.295569896697998 5.7148118019104 C 5.711060047149658 5.704371452331543 6.070509910583496 5.444971561431885 6.211329936981201 5.053961753845215 L 7.499780178070068 1.476271629333496 L 7.500219821929932 1.476271629333496 L 8.788669586181641 5.053961753845215 C 8.929499626159668 5.444991588592529 9.288960456848145 5.704381465911865 9.704440116882324 5.714801788330078 L 13.55142021179199 5.811331748962402 C 13.55141830444336 5.811331748962402 13.55141830444336 5.811332225799561 13.55141830444336 5.811332702636719 L 10.51249980926514 8.0968017578125 C 10.17848968505859 8.347991943359375 10.03538036346436 8.785541534423828 10.15639972686768 9.185561180114746 L 11.24934005737305 12.79833126068115 L 8.059679985046387 10.64415168762207 C 7.893760204315186 10.53208160400391 7.700220108032227 10.47285175323486 7.5 10.47285175323486 C 7.299779891967773 10.47285175323486 7.106239795684814 10.53208160400391 6.940320014953613 10.64415168762207 L 3.750659942626953 12.79834175109863 C 3.750658750534058 12.79834270477295 3.750657558441162 12.79834365844727 3.750656127929688 12.79834365844727 Z" stroke="none"/>
                          <path d="M 7.499999046325684 2.951329231262207 L 6.681750297546387 5.223381996154785 C 6.47052001953125 5.809901237487793 5.931349754333496 6.199001312255859 5.308110237121582 6.214661598205566 L 2.897180557250977 6.275151252746582 L 4.788020133972168 7.697191715240479 C 5.289050102233887 8.073991775512695 5.50370979309082 8.730311393737793 5.322179794311523 9.330341339111328 L 4.636562347412109 11.59667778015137 L 6.660449981689453 10.229811668396 C 6.909339904785156 10.06171226501465 7.199649810791016 9.972851753234863 7.5 9.972851753234863 C 7.800320148468018 9.972851753234863 8.090610504150391 10.06170177459717 8.339519500732422 10.22979164123535 L 10.36343383789062 11.59667491912842 L 9.677820205688477 9.330350875854492 C 9.49629020690918 8.730311393737793 9.710949897766113 8.073991775512695 10.21196937561035 7.697191715240479 L 12.10282611846924 6.275148391723633 L 9.691850662231445 6.214652061462402 C 9.068649291992188 6.199001312255859 8.52947998046875 5.809901237487793 8.318240165710449 5.223371505737305 L 7.499999046325684 2.951329231262207 M 7.5 0.9756565093994141 C 7.695525169372559 0.9756565093994141 7.891049861907959 1.085851669311523 7.970419883728027 1.306241989135742 L 9.259090423583984 4.884541511535645 C 9.328969955444336 5.078571319580078 9.510809898376465 5.20979118347168 9.716970443725586 5.214971542358398 L 13.56396007537842 5.311491966247559 C 14.03765964508057 5.323381423950195 14.23064994812012 5.926131248474121 13.8519401550293 6.210941314697266 L 10.81303024291992 8.496401786804199 C 10.64533042907715 8.62252140045166 10.57422065734863 8.839941024780273 10.63498020172119 9.040781021118164 L 11.72792053222656 12.65355110168457 C 11.86417961120605 13.10396099090576 11.35947036743164 13.4760627746582 10.9694995880127 13.21269130706787 L 7.779839992523193 11.05850124359131 C 7.6107497215271 10.94430160522461 7.3892502784729 10.94430160522461 7.220160007476807 11.05850124359131 L 4.030500411987305 13.21269130706787 C 3.640530586242676 13.47606086730957 3.135820388793945 13.10396194458008 3.272080421447754 12.65355110168457 L 4.365019798278809 9.040781021118164 C 4.425780296325684 8.839941024780273 4.354669570922852 8.62252140045166 4.186969757080078 8.496401786804199 L 1.148059844970703 6.210941314697266 C 0.7693500518798828 5.926131248474121 0.9623403549194336 5.323381423950195 1.436039924621582 5.311491966247559 L 5.283029556274414 5.214971542358398 C 5.489190101623535 5.20979118347168 5.671030044555664 5.078571319580078 5.740909576416016 4.884541511535645 L 7.029580116271973 1.306241989135742 C 7.108950138092041 1.085851669311523 7.304474830627441 0.9756565093994141 7.5 0.9756565093994141 Z" stroke="none" fill="#ffde37"/>
                        </g>
                        <g id="Polygon_5" data-name="Polygon 5" transform="translate(60 4)" fill="none">
                          <path d="M6.526,1.41a.5.5,0,0,1,.948,0L8.639,4.875a.5.5,0,0,0,.461.341l3.542.1a.5.5,0,0,1,.3.889L10.089,8.5a.5.5,0,0,0-.167.525l1.014,3.592a.5.5,0,0,1-.774.541L7.293,11.082a.5.5,0,0,0-.586,0L3.839,13.157a.5.5,0,0,1-.774-.541L4.079,9.024A.5.5,0,0,0,3.911,8.5L1.058,6.2a.5.5,0,0,1,.3-.889l3.542-.1a.5.5,0,0,0,.461-.341Z" stroke="none"/>
                          <path d="M 6.999999046325684 3.138650894165039 L 6.309179782867432 5.193872451782227 C 6.109469890594482 5.788042068481445 5.554280281066895 6.198562622070312 4.92765998840332 6.215412139892578 L 2.743719100952148 6.274124145507812 L 4.538640022277832 7.720442295074463 C 5.007430076599121 8.098182678222656 5.20464038848877 8.716642379760742 5.041040420532227 9.296042442321777 L 4.417693138122559 11.50373363494873 L 6.12060022354126 10.27150249481201 C 6.378069877624512 10.08516311645508 6.682159900665283 9.986672401428223 7 9.986672401428223 C 7.31781005859375 9.986672401428223 7.621890068054199 10.0851526260376 7.879340171813965 10.27145195007324 L 9.582311630249023 11.50373458862305 L 8.958959579467773 9.296042442321777 C 8.795360565185547 8.716642379760742 8.992569923400879 8.098182678222656 9.461349487304688 7.720442295074463 L 11.25627708435059 6.274123191833496 L 9.072330474853516 6.215412139892578 C 8.445720672607422 6.198562622070312 7.890530109405518 5.788042068481445 7.690810203552246 5.193872451782227 L 6.999999046325684 3.138650894165039 M 7 1.069317817687988 C 7.198797702789307 1.069317817687988 7.397594928741455 1.182882308959961 7.473939895629883 1.410012245178223 L 8.638700485229492 4.875262260437012 C 8.705550193786621 5.074142456054688 8.889459609985352 5.210132598876953 9.099209785461426 5.21577262878418 L 12.64157962799072 5.311002731323242 C 13.10647964477539 5.323502540588379 13.30399036407471 5.90836238861084 12.94186019897461 6.200162887573242 L 10.08878993988037 8.499113082885742 C 9.93278980255127 8.624813079833984 9.866889953613281 8.831502914428711 9.921329498291016 9.024312973022461 L 10.93546009063721 12.61600208282471 C 11.06427001953125 13.07219314575195 10.54518985748291 13.43482208251953 10.16115951538086 13.15694236755371 L 7.293109893798828 11.08160209655762 C 7.118200302124023 10.95503234863281 6.881799697875977 10.95503234863281 6.706890106201172 11.08160209655762 L 3.838839530944824 13.15694236755371 C 3.454813003540039 13.43483066558838 2.93572998046875 13.07219314575195 3.064539909362793 12.61600208282471 L 4.078669548034668 9.024312973022461 C 4.133110046386719 8.831502914428711 4.06721019744873 8.624813079833984 3.911210060119629 8.499113082885742 L 1.058139801025391 6.200162887573242 C 0.696009635925293 5.90836238861084 0.8935203552246094 5.323502540588379 1.358420372009277 5.311002731323242 L 4.900790214538574 5.21577262878418 C 5.110540390014648 5.210132598876953 5.294449806213379 5.074142456054688 5.361300468444824 4.875262260437012 L 6.526060104370117 1.410012245178223 C 6.602405071258545 1.182882308959961 6.801202297210693 1.069317817687988 7 1.069317817687988 Z" stroke="none" fill="#ffde37"/>
                        </g>
                        <g id="Mask_Group_129" data-name="Mask Group 129" transform="translate(56.05 0.459)" clip-path="url(#clip-path)">
                          <g id="Polygon_6" data-name="Polygon 6" transform="translate(3.95 3.541)" fill="#ffde37">
                            <path d="M 3.545730113983154 12.75187206268311 L 4.559860229492188 9.160181999206543 C 4.668920040130615 8.773902893066406 4.537449836730957 8.361602783203125 4.224929809570312 8.109772682189941 L 1.371860027313232 5.810832500457764 C 1.371858358383179 5.810831069946289 1.371856689453125 5.810829639434814 1.371855020523071 5.810828685760498 C 1.371855735778809 5.810826301574707 1.371856331825256 5.810824394226074 1.371857047080994 5.810822486877441 C 1.37185800075531 5.810822486877441 1.371859073638916 5.810822486877441 1.371860027313232 5.810822486877441 L 4.914229869842529 5.715592384338379 C 5.33197021484375 5.704362392425537 5.702099800109863 5.430672645568848 5.835239887237549 5.034572601318359 L 7 1.569322466850281 L 8.164759635925293 5.034562587738037 C 8.297900199890137 5.430672645568848 8.66802978515625 5.704362392425537 9.085769653320312 5.715592384338379 L 12.62814044952393 5.810822486877441 C 12.62814044952393 5.810822486877441 12.62814140319824 5.810822486877441 12.62814235687256 5.810822486877441 C 12.62813854217529 5.810825824737549 12.62813377380371 5.810829162597656 12.62812995910645 5.810832500457764 L 9.775070190429688 8.109782218933105 C 9.462550163269043 8.361602783203125 9.331080436706543 8.773902893066406 9.440139770507812 9.160172462463379 L 10.454270362854 12.75187206268311 C 10.45426273345947 12.75185298919678 10.45426177978516 12.75185394287109 10.45425987243652 12.75185489654541 L 7.586219787597656 10.67653274536133 C 7.414589881896973 10.55232238769531 7.211870193481445 10.48667240142822 7 10.48667240142822 C 6.788129806518555 10.48667240142822 6.585410118103027 10.55232238769531 6.413770198822021 10.67653274536133 L 3.545730113983154 12.75187206268311 Z" stroke="none"/>
                            <path d="M 6.999999046325684 3.138650894165039 L 6.309179782867432 5.193872451782227 C 6.109469890594482 5.788042068481445 5.554280281066895 6.198562622070312 4.92765998840332 6.215412139892578 L 2.743719100952148 6.274124145507812 L 4.538640022277832 7.720442295074463 C 5.007430076599121 8.098182678222656 5.20464038848877 8.716642379760742 5.041040420532227 9.296042442321777 L 4.417693138122559 11.50373363494873 L 6.12060022354126 10.27150249481201 C 6.378069877624512 10.08516311645508 6.682159900665283 9.986672401428223 7 9.986672401428223 C 7.31781005859375 9.986672401428223 7.621890068054199 10.0851526260376 7.879340171813965 10.27145195007324 L 9.582311630249023 11.50373458862305 L 8.958959579467773 9.296042442321777 C 8.795360565185547 8.716642379760742 8.992569923400879 8.098182678222656 9.461349487304688 7.720442295074463 L 11.25627708435059 6.274123191833496 L 9.072330474853516 6.215412139892578 C 8.445720672607422 6.198562622070312 7.890530109405518 5.788042068481445 7.690810203552246 5.193872451782227 L 6.999999046325684 3.138650894165039 M 7 1.069317817687988 C 7.198797702789307 1.069317817687988 7.397594928741455 1.182882308959961 7.473939895629883 1.410012245178223 L 8.638700485229492 4.875262260437012 C 8.705550193786621 5.074142456054688 8.889459609985352 5.210132598876953 9.099209785461426 5.21577262878418 L 12.64157962799072 5.311002731323242 C 13.10647964477539 5.323502540588379 13.30399036407471 5.90836238861084 12.94186019897461 6.200162887573242 L 10.08878993988037 8.499113082885742 C 9.93278980255127 8.624813079833984 9.866889953613281 8.831502914428711 9.921329498291016 9.024312973022461 L 10.93546009063721 12.61600208282471 C 11.06427001953125 13.07219314575195 10.54518985748291 13.43482208251953 10.16115951538086 13.15694236755371 L 7.293109893798828 11.08160209655762 C 7.118200302124023 10.95503234863281 6.881799697875977 10.95503234863281 6.706890106201172 11.08160209655762 L 3.838839530944824 13.15694236755371 C 3.454813003540039 13.43483066558838 2.93572998046875 13.07219314575195 3.064539909362793 12.61600208282471 L 4.078669548034668 9.024312973022461 C 4.133110046386719 8.831502914428711 4.06721019744873 8.624813079833984 3.911210060119629 8.499113082885742 L 1.058139801025391 6.200162887573242 C 0.696009635925293 5.90836238861084 0.8935203552246094 5.323502540588379 1.358420372009277 5.311002731323242 L 4.900790214538574 5.21577262878418 C 5.110540390014648 5.210132598876953 5.294449806213379 5.074142456054688 5.361300468444824 4.875262260437012 L 6.526060104370117 1.410012245178223 C 6.602405071258545 1.182882308959961 6.801202297210693 1.069317817687988 7 1.069317817687988 Z" stroke="none" fill="#ffde37"/>
                          </g>
                        </g>
                      </svg>
                    </div>
                  </div>
                </a>

                <div class="nav-toolbar nav-has-dropdowns">
                  @if( has_nav_menu('toolbar') )
                    {!! wp_nav_menu(['theme_location' => 'toolbar', 'menu_class' => 'nav nav-has-dropdowns list-reset']) !!}
                  @endif
                </div>
                <ul class="list-reset xxl:mr-8 mr-4 flex">
                  @include('partials.components.social_icons', ['location'=>'header'])
                  @if( $brand_phone_link )
                  <li class="flex flex-nowrap 2xl:text-sm text-[0.80rem] 2xl:mr-8 mr-4">
                    <a href="tel:{!! $brand_phone_link !!}" class="flex items-center">
                      <div class="text-white font-semibold whitespace-nowrap">Sales:<i class="text-primary fa fa-phone inline-block mx-1 mt-0.5"></i> </div>
                      <span class="text-white font-semibold whitespace-nowrap">{!! $brand_phone_label ? $brand_phone_label : $brand_phone_link !!}</span>
                    </a>
                  </li>
                  @endif
                  @if( $brand_phone_alt_link )
                  <li class="flex flex-nowrap 2xl:text-sm text-[0.80rem] 2xl:mr-8 mr-4">
                    <a href="tel:{!! $brand_phone_alt_link !!}" class="flex items-center">
                      <div class="text-white font-semibold whitespace-nowrap">Queries:<i class="text-primary fa fa-phone-plus inline-block mx-1 mt-0.5"></i> </div>
                      <span class="text-white font-semibold whitespace-nowrap">{!! $brand_phone_alt_label ? $brand_phone_alt_label : $brand_phone_alt_link !!}</span>
                    </a>
                  </li>
                  @endif
                  @if( $brand_email )
                  <li class="flex flex-nowrap 2xl:text-sm text-[0.80rem]">
                    <a href="mailto:{!! $brand_email !!}" class="flex items-center">
                      <i class="text-primary fa fa-envelope-open inline-block float-left whitespace-nowrap mr-2 mt-0.5"></i>
                      <span class="text-white font-semibold whitespace-nowrap">{!! $brand_email !!}</span>
                    </a>
                  </li>
                  @endif
              </div>
            </div>
          </div>
          <div id="header" class="lg:py-4 py-0">
            <div class="">
              <div class="container ml-auto flex items-center justify-between lg:justify-end py-2 lg:py-0">
                {!! $brand_phone_link ? '<a href="tel:' . $brand_phone_link . '" class="lg:hidden px-4 text-white py-2 -ml-2"><i class="fa fa-phone"></i></a>' : null; !!}

                <a class="brand border-0 lg:hidden block" href="{{ home_url('/') }}">
                  @if( $logo )
                  <img src="{!! $logo['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $logo_retina ? ' srcset="' . $logo['url'] . ' 1x, ' . $logo_retina['url'] . ' 2x"' : null !!} width="auto" height="50" class="hidden logo-scroll object-contain lg:inline-block w-auto h-[7rem]">
                  @else
                  {{ get_bloginfo('name', 'display') }}
                  @endif
                  @if( $icon )
                  <img src="{!! $icon['url'] !!}" alt="{!! get_bloginfo('name', 'display') !!} Logo"{!! $icon_retina ? ' srcset="' . $icon['url'] . ' 1x, ' . $icon_retina['url'] . ' 2x"' : null !!} width="32" height="32" class="lg:hidden w-auto h-[4rem]">
                  @else
                  {{ get_bloginfo('name', 'display') }}
                  @endif
                </a>

                <button id="nav-primary-toggle" type="button" class="lg:hidden outline-none px-4 py-2 text-white -mr-2"><i class="fa fa-bars"></i></button>
                <div class="nav-backdrop lg:hidden fixed w-full right-0 z-10 transition invisible opacity-0"></div>
                <nav class="nav-primary nav-has-dropdowns">
                  @if( has_nav_menu('primary_navigation') )
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav relative overflow-y-scroll lg:overflow-visible z-20']) !!}
                  @endif
                </nav>
              </div>
            </div>
            <div id="cookie-notice" class="relative md:fixed md:left-2 md:bottom-2 w-full transition">
              <div class="p-1 md:p-2 relative bg-white rounded-sm shadow-lg text-center md:text-left">
                <button class="cookie-notice-dismiss hidden md:inline-block text-gray-900 hover:text-green-500 transition focus:outline-none px-2 py-0-25 absolute top-1 right-1"><i class="fa fa-times fa-sm"></i></button>
                <p class="text-sm text-gray-600 mb-0 md:pr-1">
                  We use cookies to improve your experience. By using our site you are agreeing to our <a href="/cookie-policy/" class="text-gray-800 border-none">Cookie Policy</a>.
                </p>
                <button class="cookie-notice-dismiss md:absolute md:right-1 bottom-0 px-2 md:px-0-25 md:py-3 inline-block text-primary hover:text-green-500 transition text-sm focus:outline-none mt-0-25"><span class="md:hidden">Tap to accept & close</span><span class="hidden md:inline">Accept & Close</span></button>
              </div>
            </div>
          </div>
        </div>

    </div>

  </div>

  @php
  $i = 0;
@endphp
@if (have_rows('mega_menu_repeater', 'option'))
  @while (have_rows('mega_menu_repeater', 'option'))
  @php
    the_row();
    $i++;
    $menu_item_link = get_sub_field('menu_item_link');
    $menu_name = str_replace('menu-', '', $menu_item_link)
  @endphp
    <div class="mega-menu" data-mega-menu="{{ $menu_item_link }}" style="display: none;">
      <div class="container mx-auto py-12">
        <div class="flex flex-wrap -mx-1">

          @while (have_rows('mega_menu')) @php the_row(); @endphp
            <div class="xl:w-3/4 w-full pr-1">
              <div class="flex flex-wrap">
                @while (have_rows('menu_columns'))
                @php
                  the_row();
                  $column_title = get_sub_field('column_title');
                @endphp

                  <div class="w-1/3 px-1">
                    <h4>{{ $column_title }}</h4>
                    <ul>
                      @while (have_rows('page_links'))
                      @php
                        the_row();
                        $page_link = get_sub_field('page_link');
                        $custom_title = get_sub_field('custom_title');
                        $custom_link = get_sub_field('custom_link');
                        $page_link_sector = get_sub_field('page_link_sector');
                      @endphp
                      <li {!! have_rows('sub_menu') ? 'class="sub-menu-parent"' : null !!} >
                        <a href="{!! $custom_link ? $custom_link : get_the_permalink( $page_link ) !!}">{!! $custom_title ? $custom_title : get_the_title( $page_link ) !!}</a>
                        @if (have_rows('sub_menu'))
                          <div class="sub-menu-popup">
                            <ul>
                              @while (have_rows('sub_menu'))
                              @php
                                the_row();
                                $page_link = get_sub_field('page_link');
                                $custom_title = get_sub_field('custom_title');
                                $custom_link = get_sub_field('custom_link');
                              @endphp
                                <li>
                                  <a href="{!! $page_link ? get_the_permalink( $page_link ) : $custom_link !!}">{!! $custom_title ? $custom_title : get_the_title( $page_link ) !!}</a>
                                </li>
                              @endwhile
                            </ul>
                          </div>
                        @endif
                      </li>
                      @php wp_reset_postdata(); @endphp
                      @endwhile
                    </ul>
                  </div>
                @endwhile
              </div>
            </div>

            <div class="xl:w-1/4 hidden xl:block ">
              <a href="/double-glazing-quote-lincoln/">
                <div class="embed embed-21by9 mb-4 mega-menu-cta-card rounded-xl shadow-xl">
                  <img class="object-cover-absolute z-0" src="/app/uploads/2023/09/quote-mockup-starglaze.jpg" alt="Free Online Quotations">
                  <h6>Free Online Quote</h6>
                </div>
              </a>
              <a href="/blog/">
                <div class="embed embed-21by9 mb-4 mega-menu-cta-card rounded-xl shadow-xl">
                  <img class="object-cover-absolute z-0" src="/app/uploads/2023/09/star-home-blog.jpg" alt="Blog">
                  <h6>Star Home Blog</h6>
                </div>
              </a>
              <a href="/downloads/">
                <div class="embed embed-21by9 mega-menu-cta-card rounded-xl shadow-xl">
                  <img class="object-cover-absolute z-0" src="/app/uploads/2020/10/stock-05.jpg" alt="Contact">
                  <h6>Download Brochures</h6>
                </div>
              </a>
              
            </div>

          @endwhile

        </div>
      </div>
    </div>
  @endwhile
@endif
</header>

<script type="text/javascript">
  (function($) {
      $(window).scroll(function() {
          if ($(document).scrollTop() > 100) {
              $('header').addClass('is-scrolled');
          } else {
              $('header').removeClass('is-scrolled');
          }
      });
  })(jQuery);
  </script>