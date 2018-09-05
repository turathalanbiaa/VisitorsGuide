@switch(app()->getLocale())
    @case("ar") <i class="fa fa-angle-double-left align-middle"></i> @break
    @case("fa") <i class="fa fa-angle-double-left align-middle"></i> @break
    @case("en") <i class="fa fa-angle-double-right align-middle"></i> @break
    @default    <i class="fa fa-angle-double-left align-middle"></i>
@endswitch