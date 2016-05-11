@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
sazutailanmayagts List
@parent
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Салбар зөвлөлийн тайлан маягт</h1>
    <ol class="breadcrumb">
          <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Админ хуудас
            </a>
        </li>
        <li>Салбар зөвлөлийн тайлан маягт</li>
        <li class="active">Бөглөх хэсэг</li>
    </ol>
</section> 





<section class="content paddingleft_right15">
    <div class="row">


        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Цус сэлбэлтийг зохицуулах салбар зөвлөлийн тайлангийн маягт
                </h4>
                
            </div>
            <br />
            <div class="panel-body">           
            @foreach ($sazutailanmayagts as $sazutailanmayagt)
                
               <h3>Заавар, журам, бүртгэлтэй холбоотой ерөнхий мэдээлэл</h3>
                <table class="table table-bordered " id="table">
                  
                    <tbody>
                         <tr>
                            <td width="45px">1</td>
                            <td>Эмнэлгийн нэр</td>
                            <td colspan="2" width="220px">{!! $sazutailanmayagt->gurav !!}</td>
                            
                        </tr><tr>
                            <td>2</td>
                            <td>Эмнэлгийн тусламж үйлчилгээ үзүүлэх шатлал</td>
                            <td colspan="2">{!! $sazutailanmayagt->gurav1 !!}</td>
                           
                        </tr><tr>
                            <td>2.1</td>
                            <td>Төрөлжсөн нарийн мэргэжил</td>
                            <td colspan="2">{!! $sazutailanmayagt->gurav2 !!}</td>
                           
                        </tr><tr>
                            <td>2.2</td>
                            <td>Клиникийн нэгдсэн эмнэлэг</td>
                            <td colspan="2">{!! $sazutailanmayagt->gurav3 !!}</td>
                           
                        </tr><tr>
                            <td>2.3</td>
                            <td>Аймаг, дүүргийн нэгдсэн эмнэлэг</td>
                            <td colspan="2">{!! $sazutailanmayagt->gurav4 !!}</td>
                            
                        </tr><tr>
                            <td>2.4</td>
                            <td>Орон нутгийн нэгдсэн эмнэлэг</td>
                            <td colspan="2">{!! $sazutailanmayagt->gurav5 !!}</td>
                            
                        </tr><tr>
                            <td>2.5</td>
                            <td>Сумийн эмнэлэг</td>
                            <td colspan="2">{!! $sazutailanmayagt->gurav5 !!}</td>
                            
                        </tr>



                    
                        <tr>
                            <td width="45px">3</td>
                            <td>Эмнэлгийн дэргэдэх цус сэлбэлтийг зохицуулах салбар зөвлөлтэй эсэх</td>
							<td width="110px">{!! $sazutailanmayagt->gurav !!}</td>
							<td width="110px"> </td>
                        </tr><tr>
							<td>3.1</td>
							<td>Хэрэв тийм бол Тушаалын хуулбар хавсаргах</td>
							<td>{!! $sazutailanmayagt->gurav1 !!}</td>
							<td> </td>
                        </tr><tr>
							<td>3.2</td>
							<td>Жилийн ажлын төлөвлөгөөтэй ажилладаг эсэх /Хэрэв тийм бол төлөвлөгөөг биелэлтийн хамт хавсаргах/</td>
							<td>{!! $sazutailanmayagt->gurav2 !!}</td>
							<td>{!! $sazutailanmayagt->gurav2 !!}</td>
                        </tr><tr>
							<td>3.3</td>
							<td>Зөвлөлийн хурал хийсэн удаа</td>
							<td>{!! $sazutailanmayagt->gurav3 !!}</td>
							<td> </td>
                        </tr><tr>
							<td>3.4</td>
							<td>Зөвлөлийн хурлын /протокол хавсаргах/</td>
							<td>{!! $sazutailanmayagt->gurav4 !!}</td>
							<td> </td>
                        </tr><tr>
							<td>3.5</td>
							<td>Цус сэлбэх үйл ажиллагаанд хяналт үнэлгээ хийсэн эсэх /хэрэв тийм бол үнэлгээний тайланг хавсаргах/</td>
							<td>{!! $sazutailanmayagt->gurav5 !!}</td>
                            <td>   </td>
                        </tr>
                    </tbody>
                </table>

                 <h3>ЦЦБ-ний нөөцийн хадгалалт, тээвэрлэлт</h3>


                <table class="table table-bordered " id="table">
                    <tbody>
                        <tr>
                            <td width="45px">4</td>
                            <td>Эмнэлзүйн цус сэлбэлтийн нэгж нь ЦЦБ-нийг нөөцөлж хадгалдаг эсэх</td>
                            <td width="110px">{!! $sazutailanmayagt->duruv !!}</td>
                            <td width="110px"> </td>
                        </tr><tr>
                            <td>4.1</td>
                            <td>Зориулалтын хөргөгчтэй эсэх</td>
                            <td>{!! $sazutailanmayagt->duruv1 !!}</td>
                            <td> </td>
                        </tr><tr>
                            <td>4.2</td>
                            <td>Зориулалтын хөлдөөгчтэй эсэх</td>
                            <td>{!! $sazutailanmayagt->duruv2 !!}</td>
                            <td> </td>
                        </tr><tr>
                            <td>4.3</td>
                            <td>ЦЦБ-нийг тээвэрлэх савтай эсэх</td>
                            <td>{!! $sazutailanmayagt->duruv3 !!}</td>
                            <td> </td>
                        </tr><tr>
                            <td>4.4</td>
                            <td>ЦЦБ-нийг тээвэрлэх савны тоо</td>
                            <td>{!! $sazutailanmayagt->duruv4 !!}</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>

                 <h3>ЦЦБ сэлбэсэн өвчтөний тоо</h3>


                <table class="table table-bordered " id="table">
                    <tbody>
                        <tr>
                            <td width="45px">5</td>
                            <td>Өвчтөний нас хүйс</td>
                            <td width="110px">Эрэгтэй</td>
                            <td width="110px">Эмэгтэй</td>
                        </tr><tr>
                            <td>5.1</td>
                            <td>5-аас доош нас</td>
                            <td>{!! $sazutailanmayagt->tav1 !!}</td>
                            <td>{!! $sazutailanmayagt->tav1 !!}</td>
                        </tr><tr>

                            <td>5.2</td>
                            <td>5-аас 15-н нас</td>
                            <td>{!! $sazutailanmayagt->tav2 !!}</td>
                            <td>{!! $sazutailanmayagt->tav2 !!}</td>
                        </tr><tr>
                            <td>5.3</td>
                            <td>16-аас 44-н нас</td>
                            <td>{!! $sazutailanmayagt->tav3 !!}</td>
                            <td>{!! $sazutailanmayagt->tav3 !!}</td>
                        </tr><tr>
                            <td>5.4</td>
                            <td>45-аас 59-н нас</td>
                            <td>{!! $sazutailanmayagt->tav4 !!}</td>
                            <td>{!! $sazutailanmayagt->tav4 !!}</td>
                        </tr><tr>
                            <td>5.5</td>
                            <td>60-аас дээш нас</td>
                            <td>{!! $sazutailanmayagt->tav5 !!}</td>
                            <td>{!! $sazutailanmayagt->tav5 !!}</td>
                        </tr>
                    </tbody>
                </table>

                   <h3>Фракцинацаар гаргаж авсан бэлдмэлүүдийн хэрэглээ тоо</h3>


                <table class="table table-bordered " id="table">
                    <tbody>
                        <tr>
                            <td width="45px">6</td>
                            <td>Бэлдмэлийн нэр</td>
                            <td width="110px">Нийт хэрэглээ нэгж /фл/</td>
                            <td width="110px">Хэрэглэсэн өвчтөний тоо</td>
                        </tr><tr>
                            <td>6.1</td>
                            <td>Альбумин</td>
                            <td>{!! $sazutailanmayagt->zurgaa1 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa1 !!}</td>
                        </tr><tr>
                            <td>6.2</td>
                            <td>Иммуноглобурин</td>
                            <td>{!! $sazutailanmayagt->zurgaa2 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa2 !!}</td>
                        </tr><tr>
                            <td>6.3</td>
                            <td>Гемофилийн эсрэг 8-р фактор</td>
                            <td>{!! $sazutailanmayagt->zurgaa3 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa3 !!}</td>
                        </tr><tr>
                            <td>6.4</td>
                            <td>Гемофилийн эсрэг 9-р фактор</td>
                            <td>{!! $sazutailanmayagt->zurgaa4 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa4 !!}</td>
                        </tr><tr>
                            <td>6.5</td>
                            <td>Эритропоэтин</td>
                            <td>{!! $sazutailanmayagt->zurgaa5 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa5 !!}</td>
                        </tr><tr>
                            <td>6.6</td>
                            <td>Протеин</td>
                            <td>{!! $sazutailanmayagt->zurgaa6 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa6 !!}</td>
                        </tr><tr>
                            <td>6.7</td>
                            <td>Цагаан эс өсгөгч фактор</td>
                            <td>{!! $sazutailanmayagt->zurgaa7 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa7 !!}</td>
                        </tr><tr>
                            <td>6.8</td>
                            <td>Тромбоцит өсгөгч фактор</td>
                            <td>{!! $sazutailanmayagt->zurgaa8 !!}</td>
                            <td>{!! $sazutailanmayagt->zurgaa8 !!}</td>
                        </tr>
                    </tbody>
                </table>

                   <h3>Сургалтын талаар</h3>


                <table class="table table-bordered " id="table">
                    <tbody>
                        <tr>
                            <td width="45px">7</td>
                            <td>Сургалт хийсэн тоо</td>
                            <td width="110px">{!! $sazutailanmayagt->doloo !!}</td>
                            <td width="110px"> </td>
                        </tr><tr>
                            <td>7.1</td>
                            <td>Сургалтанд хамрагдсан хүн</td>
                            <td>{!! $sazutailanmayagt->doloo1 !!}</td>
                            <td> </td>
                        </tr><tr>
                            <td>7.2</td>
                            <td>Сургалтын хөтөлбөр, тайланг хавсаргах</td>
                            <td>{!! $sazutailanmayagt->doloo2 !!}</td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>


                @endforeach
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
