<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Products</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-cart"></i>
              <i class="fa-solid fa-boxes-stacked"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('listprod')}}">List Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('showprod')}}">Add Product</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Categories and SubCategories</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-package-variant-closed"></i>
              <span class="menu-title">categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">List category</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Category</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#subcategories" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-package-variant"></i>
              <span class="menu-title">subcategories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="subcategories">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">list SubCategory</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add SubCategory</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">collections</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#collections" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-tshirt-crew"></i>
              <span class="menu-title">collections</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="collections">
              <ul class="nav flex-column sub-menu">
              
                <li class="nav-item"><a class="nav-link" href="#">List collection</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Collection</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Caroussel</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#caroussel" aria-expanded="false" aria-controls="caroussel">
              <i class="menu-icon mdi mdi-image-album"></i>
              <span class="menu-title">Caroussel</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="caroussel">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">List Carroussel</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Add Caroussel</a></li>
              </ul>
            </div> 
          </li>
          <li class="nav-item nav-category">Coupons</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#coupons" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-tag-outline"></i>
              <span class="menu-title">Coupons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="coupons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">List Coupons</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Add Coupon</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Payments</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#wise" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-cash-usd"></i>
              <span class="menu-title">wise</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="wise">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">List Payments</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#payoner" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-cash"></i>
              <span class="menu-title">payonner</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payoner">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">List Payments</a></li>
              </ul>
            </div>
          </li>    
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#paypal" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-parking"></i>
              <span class="menu-title">paypal</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="paypal">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">List Payments</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#banktransfer" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-bank"></i>
              <span class="menu-title">bank transfer</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="banktransfer">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">List Payments</a></li>
              </ul>
            </div>
          </li>
          
          
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
              </ul>
            </div> 
          </li> -->
 
        </ul>
      </nav>