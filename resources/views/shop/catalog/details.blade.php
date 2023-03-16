<x-layout>

    <div class="catalogue-categories">
        <div class="container-outer">
          <div class="catalogue-categories__outer">
            <div class="catalogue-categories__inner">
              <div class="catalogue-categories-title-section">
                <div class="catalogue-categories-title-item fw-600-14-17">
                  <p>Стельки</p>
                </div>
                <div class="catalogue-categories-title-item fw-600-14-17">
                  <p>Корсеты</p>
                </div>
                <div class="catalogue-categories-title-item fw-600-14-17">
                  <p>Обувь</p>
                </div>
                <div class="catalogue-categories-title-item fw-600-14-17">
                  <p>Название категории</p>
                </div>
                <div class="catalogue-categories-title-item fw-600-14-17">
                  <p>Название категории</p>
                </div>
              </div>
              <div class="catalogue-breadcrumb-wrapper fw-400-18-22">
                <div class="catalogue-breadcrumb-item">
                  <a href=""><p>Главная</p></a>
                </div>
                <div class="catalogue-breadcrumb-dot-wrapper center">
                  <div class="catalogue-breadcrumb-dot"></div>
                </div>
                <div class="catalogue-breadcrumb-item">
                  <a href=""><p>Каталог</p></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="catalogue-section">
        <div class="container-outer">
          <div class="catalogue-section__title center fw-700-45-55">
            <p>Ортопедическая обувь</p>
          </div>
          <div class="catalogue-filter-row catalogue-section__catalogue-filter-row">
            <div class="total-found-label fw-400-16-19">
              <p>Показано {{$products_total}} @if ($products_total > 1) товаров @else товар @endif</p>
            </div>
            <div class="sort-filter catalogue-filter-row__sort-filter fw-600-14-17">
              <input type="text" class="total-found-sidebar__input" placeholder="Сортировка" />
              <div class="total-found-sidebar__chevron-down-icon-wrapper center">
                <ion-icon class="total-found-sidebar__chevron-down-icon" name="chevron-down-outline"></ion-icon>
              </div>
            </div>
          </div>
          <div class="catalogue catalogue-section__catalogue">
            <form id="catalogue__left_form" class="catalogue__left" method="GET" action="{{route('catalogs.details',$catalog->slug)}}">

              <ul class="total-found-sidebar catalogue__total-found-sidebar fw-400-16-19">

                @foreach($catalog->subcatalogs as $subcatalog)
                {{-- // active --}}
                      <input value="{{$subcatalog->id}}" type="checkbox" name="subcatalog" id={{"subcatalog" . $subcatalog->id}} class="subcatalog_filter" style="display: none" @if($subcatalog->id.'' === request()->get('subcatalog')) checked @endif>
                      <li> 
                        <label class="catalogue-sidebar-item total-found-sidebar__catalogue-sidebar-item @if($subcatalog->id.'' === request()->get('subcatalog')) active @endif" for={{"subcatalog" . $subcatalog->id}}>
                          <div class="catalogue-sidebar-item__title">
                              <p>{{$subcatalog->title}}</p>
                             
                          
                          </div>
                          <div class="catalogue-sidebar-item__total">
                              <p>({{$subcatalog->products_count}})</p>
                          </div>
                        </label>

                        {{-- s --}}
                      </li>
                @endforeach
                
               
      
              </ul>
              <ul class="filter-sidebar catalogue__filter-sidebar fw-400-16-19">
                <li class="filter-sidebar__title center">
                  <p>Фильтр</p>
                </li>
                <ul class="filter-sidebar__inner">
                  <li class="filter-sidebar__item" onclick="openFilterDropdown(0);">
                    <div class="filter-sidebar__item-title fw-600-16-19">
                      <p>Бренд</p>
                    </div>
                    <ul class="checkbox-grid">

                        @foreach($brends as $brend)
                            <li class="checkbox-grid__item" >
                                <div class="checkbox-wrapper center">
                                <input type="checkbox" name="brand[]" id="{{"name".$brend}}" value="{{$brend}}"
                                @if(in_array( $brend ,request()->get('brand')?? [] ))
                                    checked
                                @endif
                                />
                                </div>
                                <div class="checkbox-label-wrapper center">
                                <label class="checkbox-label" for="{{"name".$brend}}">{{$brend}}</label>
                                </div>
                            </li>
                        @endforeach
                   
                    </ul>
                  </li>
                  {{-- <li class="filter-sidebar__item" onclick="openFilterDropdown(1);">
                    <div class="filter-sidebar__item-title fw-600-16-19">
                      <p>Категории</p>
                    </div>
                    <ul class="checkbox-grid">
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="obuv" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="obuv">Обувь</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="korsety" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="korsety">Корсеты</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="stelki" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="stelki">Стельки</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="chbox" id="name" />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="name">Наименование</label>
                        </div>
                      </li>
                    </ul>
                  </li> --}}
                  <li class="filter-sidebar__item" onclick="openFilterDropdown(1);">
                    <div class="filter-sidebar__item-title fw-600-16-19">
                      <p>Размер</p>
                    </div>
                    <ul class="checkbox-grid">

                     @foreach ($sizes as $item)
                      <li class="checkbox-grid__item">
                        <div class="checkbox-wrapper center">
                          <input type="checkbox" name="size[]" id="size{{$item->size}}"  value="{{$item->size}}"
                          @if(in_array( $item->size ,request()->get('size') ?? [] ))
                            checked
                          @endif
                          />
                        </div>
                        <div class="checkbox-label-wrapper center">
                          <label class="checkbox-label" for="size{{$item->size}}">{{$item->size}}</label>
                        </div>
                      </li>
                     @endforeach
                     
                     
                    </ul>
                  </li>
  
  
                </ul>
  
              </ul>
              <input type="submit" id="filter_form_submit" value="">
              {{-- <button type="submit" >dqwdqw</button> --}}
            </form>
            <div class="catalogue__grid">
              <ul class="catalogue__grid-inner">
                @foreach($products as $product)
                <li class="catalogue__item">
                    <div class="catalogue__item-photo-wrapper">
                      <div class="catalogue__item-photo">
                        <img width="100%" src="{{asset('storage/'.$product->thumbnail)}}" alt="./assets/images/catalogue-item-photo.svg" />
                      </div>
                    </div>
                    <div class="catalogue__item-bottom">
                      <div class="catalogue__item-bottom-inner">
                        <div class="catalogue__item-title fw-600-16-19">
                          <p>{{$product->title}}</p>
                        </div>
                        <div class="catalogue__item-rating">
                          <div class="catalogue__stars">
                            <div class="catalogue__star-wrapper center">
                              <i class="fa-solid fa-star catalogue__star"></i>
                            </div>
                            <div class="catalogue__star-wrapper center">
                              <i class="fa-solid fa-star catalogue__star"></i>
                            </div>
                            <div class="catalogue__star-wrapper center">
                              <i class="fa-solid fa-star catalogue__star"></i>
                            </div>
                            <div class="catalogue__star-wrapper center">
                              <i class="fa-solid fa-star catalogue__star"></i>
                            </div>
                            <div class="catalogue__star-wrapper center">
                              <i class="fa-solid fa-star catalogue__star"></i>
                            </div>
                          </div>
                          <div class="catalogue__feedback-label fw-500-12-18">
                            <p>1360 отзывов</p>
                          </div>
                        </div>
                        <div class="catalogue__in-stock-label fw-400-14-17">
                          <p>Наличие</p>
                        </div>
                        <div class="catalogue__short-desc-label fw-400-16-19">
                          <p>Краткое описание</p>
                        </div>
                        <div class="catalogue__item-price fw-700-18-22">
                          <p>{{number_format($product->price, 0, '.', ' ')}} тг</p>
                        </div>
                        <div class="cart-icon-wrapper catalogue__cart-icon-wrapper">
                          <ion-icon name="cart-outline" class="cart-icon"></ion-icon>
                        </div>
                      </div>
                    </div>
                  </li>
                @endforeach
                
           
              </ul>
              <!--
                PAGINATION
              -->
              <!-- <div class="pagination">
                <ul class="pagination-list">
                  <li class="pagination-list__item fw-600-14-17 active">
                    <p>1</p>
                  </li>
                  <li class="pagination-list__item fw-600-14-17">
                    <p>2</p>
                  </li>
                  <li class="pagination-list__item fw-600-14-17">
                    <p>...</p>
                  </li>
                  <li class="pagination-list__item fw-600-14-17">
                    <p>6</p>
                  </li>
                  <li class="pagination-list__item fw-600-14-17">
                    <p>7</p>
                  </li>
                  <li class="pagination-list__item-before pagination_arrow_left">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                  </li>
                  <li class="pagination-list__item-after pagination_arrow_right">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      
      <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
      <script>

    
          $('.subcatalog_filter').change(function(){
            
              if($(this).is(":checked")) {
                  $('.total-found-sidebar__catalogue-sidebar-item').addClass("active");
              } else {
                  $('.total-found-sidebar__catalogue-sidebar-item').removeClass("active");
              }
          });

          $('.catalogue__left input:checkbox').change(function(){

            setTimeout(() => {
              $('#filter_form_submit').click()
            }, 1000);
            
          });

          

      </script>

</x-layout>