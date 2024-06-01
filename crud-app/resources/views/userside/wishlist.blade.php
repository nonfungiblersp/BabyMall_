@include('userside.header')

    

<section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="title mb-30 pb-25 text-capitalize">Wishlist</h3>
          <div class="table-responsive">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th class="text-center" scope="col">Product Image</th>
                  <th class="text-center" scope="col">Product Name</th>
                  <th class="text-center" scope="col">Price</th>
                  <th class="text-center" scope="col">action</th>
                  <th class="text-center" scope="col">Checkout</th>
                </tr>
              </thead>
              <tbody>
             @foreach ($data as $item)

             @foreach ($product as $p)
                 @if ($p->id==$item->pid)
                     
                <tr>
                  <td class="text-center" scope="row">
                    <img src="/product/{{$p->pic1 }}" alt="img" />
                  </td>
                  <td class="text-center">
                    <span class="whish-title" 
                      ></span
                    >
                    <div class="row">{{$p->name}}</div>
                  </td>
                  
                  <td class="text-center">
                    <span class="whish-list-price"> {{$p->price}} </span>
                  </td>
  
                  <td class="text-center">
                    <a href="/wishlist/remove/{{$item->id}}">
                      <span class="trash"><i class="fas fa-trash-alt"></i> </span
                    ></a>
                  </td>
                  <td class="text-center">
                    <a href="/wishlist/addremove/{{$item->id}}" class="btn btn-dark btn--xl mt-5 mt-sm-0">
                      <span class="me-2"><i class="ion-android-add"></i></span>
                      Add to cart
                    </a>
                  </td>
                </tr>
                @endif
                @endforeach

             @endforeach

                {{-- <tr>
                  <th class="text-center" scope="row">
                    <img src="assets/img/product/4.png" alt="img" />
                  </th>
                  <td class="text-center">
                    <span class="whish-title">Originals Kaval nail polish</span>
                  </td>
                  <td class="text-center">
                    <span class="badge badge-danger position-static"
                      >In Stock</span
                    >
                  </td>
                  <td class="text-center">
                    <div class="product-count style">
                      <div class="count d-flex justify-content-center">
                        <input
                          type="number"
                          min="1"
                          max="10"
                          step="1"
                          value="1"
                        />
                        <div class="button-group">
                          <button class="count-btn increment">
                            <i class="fas fa-chevron-up"></i>
                          </button>
                          <button class="count-btn decrement">
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center">
                    <span class="whish-list-price"> $38.24 </span>
                  </td>
  
                  <td class="text-center">
                    <a href="#">
                      <span class="trash"><i class="fas fa-trash-alt"></i> </span
                    ></a>
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                  </td>
                </tr>
                <tr>
                  <th class="text-center" scope="row">
                    <img src="assets/img/product/6.png" alt="img" />
                  </th>
                  <td class="text-center">
                    <span class="whish-title">New Balance Arish makeup box</span>
                  </td>
                  <td class="text-center">
                    <span class="badge badge-danger position-static"
                      >In Stock</span
                    >
                  </td>
                  <td class="text-center">
                    <div class="product-count style">
                      <div class="count d-flex justify-content-center">
                        <input
                          type="number"
                          min="1"
                          max="10"
                          step="1"
                          value="1"
                        />
                        <div class="button-group">
                          <button class="count-btn increment">
                            <i class="fas fa-chevron-up"></i>
                          </button>
                          <button class="count-btn decrement">
                            <i class="fas fa-chevron-down"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center">
                    <span class="whish-list-price"> $38.24 </span>
                  </td> --}}
  
                  {{-- <td class="text-center">
                    <a href="#">
                      <span class="trash"><i class="fas fa-trash-alt"></i> </span
                    ></a>
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                  </td> --}}
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  @include('userside.footer')