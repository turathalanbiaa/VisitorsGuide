<style>
    @switch(app()->getLocale())
        @case("ar") body {direction: rtl; text-align: right;} @break
        @case("fa") body {direction: rtl; text-align: right;} @break
        @case("en") body {direction: ltr; text-align: left;} @break
        @default    body {direction: rtl; text-align: right;}
    @endswitch
</style>