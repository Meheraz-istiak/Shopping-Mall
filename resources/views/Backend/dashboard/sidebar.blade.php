  <div class="sidebar px-4 py-4 py-md-4 me-0">
        <div class="d-flex flex-column h-100">
          <a href="index.html" class="mb-0 brand-icon">
            <span class="logo-icon">
              <i class="fa fa-book fs-4"></i>
            </span>
            <span class="logo-text">Shopping Mall</span>
          </a>
          <!-- Menu: main ul -->
          <ul class="menu-list flex-grow-1 mt-3">
            <li>
              <a class="m-link active" href="{{route('index')}}"
                >
                <i class="icofont-home fs-5"></i> <span>Dashboard</span></a
              >
            </li>
         
     
            <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-workplace"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>Category</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-workplace">
                <li>
                  <a class="ms-link" href="{{route('category.index')}}"
                    >Add Category</a
                  >
                </li>
              
               </ul>
            </li>


              <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-SubCategory"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>SubCategory</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-SubCategory">
                <li>
                  <a class="ms-link" href="{{route('subcategory.index')}}"
                    >Add SubCategory</a
                  >
                </li>
              
               </ul>
            </li>


           <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-product"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>Product</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-product">
                <li>
                  <a class="ms-link" href="{{route('product.index')}}"
                    >Add Product</a
                  >
                </li>
              
               </ul>
            </li>


         <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-Banner"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>Banner</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-Banner">
                <li>
                  <a class="ms-link" href="{{route('banner.index')}}"
                    >Add Banner</a
                  >
                </li>
              
               </ul>
            </li>


             <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-brand"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>Brand</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-brand">
                <li>
                  <a class="ms-link" href="{{route('brand.index')}}"
                    >Add Brand</a
                  >
                </li>
              
               </ul>
            </li>


             <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-unit"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>Unit</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-unit">
                <li>
                  <a class="ms-link" href="{{route('unit.index')}}"
                    >Add Unit</a
                  >
                </li>
              
               </ul>
            </li>



             <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-size"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>Size</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-size">
                <li>
                  <a class="ms-link" href="{{route('size.index')}}"
                    >Add Size</a
                  >
                </li>
              
               </ul>
            </li>




             <li class="collapsed">
              <a
                class="m-link"
                data-bs-toggle="collapse"
                data-bs-target="#menu-color"
                href="#"
              >
                <!-- <i class="icofont-users-alt-2 fs-5"></i> -->
                <span>Color</span>
                <span
                  class="arrow icofont-rounded-down ms-auto text-end fs-5"
                ></span
              ></a>
              <!-- Menu: Sub menu ul -->
              <ul class="sub-menu collapse" id="menu-color">
                <li>
                  <a class="ms-link" href="{{route('color.index')}}"
                    >Add Color</a
                  >
                </li>
              
               </ul>
            </li>
     
            <!-- <li>
                  <a class="m-link" href="ui-elements/ui-alerts.html"
                    ><i class="icofont-paint fs-5"></i>
                    <span>UI Components</span></a
                  >
                </li> -->
            <!-- <li class="collapsed">
                  <a
                    class="m-link"
                    data-bs-toggle="collapse"
                    data-bs-target="#page"
                    href="#"
                  >
                    <i class="icofont-page fs-5"></i> <span>Other Pages</span>
                    <span
                      class="arrow icofont-rounded-down ms-auto text-end fs-5"
                    ></span
                  ></a>
                  <ul class="sub-menu collapse" id="page">
                    <li>
                      <a class="ms-link" href="admin-profile.html">Profile Page</a>
                    </li>
                    <li>
                      <a class="ms-link" href="purchase-plan.html"
                        >Price Plan Example</a
                      >
                    </li>
                    <li>
                      <a class="ms-link" href="charts.html">Charts Example</a>
                    </li>
                    <li><a class="ms-link" href="table.html">Table Example</a></li>
                    <li><a class="ms-link" href="forms.html">Forms Example</a></li>
                    <li><a class="ms-link" href="icon.html">Icons</a></li>
                    <li><a class="ms-link" href="contact.html">Contact Us</a></li>
                  </ul>
                </li> -->
          </ul>
          <!-- Menu: menu collepce btn -->
          <button
            type="button"
            class="btn btn-link sidebar-mini-btn text-light"
          >
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
          </button>
        </div>
      </div>