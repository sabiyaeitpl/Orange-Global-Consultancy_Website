<?php
   include 'layout/head.php';
   ?>
<main>
   <div class="container-fluid">

    <?php if ($role_id ==1) { ?>
 
      <div class="row">
         <div class="col-12">
            <h1>Dashboard Content</h1>
            <div class="separator mb-5"></div>
         </div>
         <div class="col-lg-12 col-xl-6">
            <div class="icon-cards-row">
               <div class="glide dashboard-numbers">
                  <div class="glide__track" data-glide-el="track">
                     <ul class="glide__slides">
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-clock"></i>
                                 <p class="card-text mb-0">Pending Posts</p>
                                 <p class="lead text-center">16</p>
                              </div>
                           </a>
                        </li>
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-basket-coins"></i>
                                 <p class="card-text mb-0">Completed Posts</p>
                                 <p class="lead text-center">32</p>
                              </div>
                           </a>
                        </li>
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-arrow-refresh"></i>
                                 <p class="card-text mb-0">Categories</p>
                                 <p class="lead text-center">2</p>
                              </div>
                           </a>
                        </li>
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-mail-read"></i>
                                 <p class="card-text mb-0">New Comments</p>
                                 <p class="lead text-center">25</p>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Comments</h5>
                        <div class="scroll dashboard-list-with-user">
                           <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                              <img alt="Profile Picture" src="img/profiles/l-1.jpg"
                                 class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                              </a>
                              <div class="pl-3">
                                 <a href="#">
                                    <p class="font-weight-medium mb-0">Very informative content, thank you. </p>
                                    <p class="text-muted mb-0 text-small">Mayra Sibley | Tea Loaf with Fresh
                                       Oranges | 17.09.2018 - 04:45
                                    </p>
                                 </a>
                              </div>
                           </div>
                           <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                              <img alt="Profile Picture" src="img/profiles/l-7.jpg"
                                 class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                              </a>
                              <div class="pl-3">
                                 <a href="#">
                                    <p class="font-weight-medium mb-0">This article was delightful to read.
                                       Please keep them coming.
                                    </p>
                                    <p class="text-muted mb-0 text-small">Barbera Castiglia | Cheesecake with
                                       Chocolate Cookies | 15.08.2018 - 01:18
                                    </p>
                                 </a>
                              </div>
                           </div>
                           <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                              <img alt="Profile Picture" src="img/profiles/l-6.jpg"
                                 class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                              </a>
                              <div class="pl-3">
                                 <a href="#">
                                    <p class="font-weight-medium mb-0">Your post is bad and you should feel
                                       bad.
                                    </p>
                                    <p class="text-muted mb-0 text-small">Bao Hathaway | Homemade Cheesecake |
                                       26.07.2018 - 11:14
                                    </p>
                                 </a>
                              </div>
                           </div>
                           <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                              <img alt="Profile Picture" src="img/profiles/l-3.jpg"
                                 class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                              </a>
                              <div class="pl-3">
                                 <a href="#">
                                    <p class="font-weight-medium mb-0">Very original idea!</p>
                                    <p class="text-muted mb-0 text-small">Lenna Majeed | Tea Loaf with Fresh
                                       Oranges | 17.06.2018 - 09:20
                                    </p>
                                 </a>
                              </div>
                           </div>
                           <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                              <img alt="Profile Picture" src="img/profiles/l-5.jpg"
                                 class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                              </a>
                              <div class="pl-3">
                                 <a href="#">
                                    <p class="font-weight-medium mb-0">This article was delightful to read.
                                       Please keep them coming.
                                    </p>
                                    <p class="text-muted mb-0 text-small">Esperanza Lodge | Cheesecake with
                                       Fresh Berries | 16.06.2018 - 16:45
                                    </p>
                                 </a>
                              </div>
                           </div>
                           <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                              <a href="#">
                              <img alt="Profile Picture" src="img/profiles/l-4.jpg"
                                 class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                              </a>
                              <div class="pl-3">
                                 <a href="#">
                                    <p class="font-weight-medium mb-0">Nah, did not like it.</p>
                                    <p class="text-muted mb-0 text-small">Brynn Bragg | Wedding Cake with
                                       Flowers | 12.04.2018 - 12:45
                                    </p>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-12 mb-4">
            <div class="card h-100">
               <div class="card-body">
                  <h5 class="card-title">Top Viewed Posts</h5>
                  <table class="data-table data-table-standard responsive nowrap"
                     data-order="[[ 1, &quot;desc&quot; ]]">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Views</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <p class="list-item-heading">Wedding Cake with Flowers Macarons</p>
                           </td>
                           <td>
                              <p class="text-muted">1452</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Cheesecake with Chocolate Cookies</p>
                           </td>
                           <td>
                              <p class="text-muted">1420</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Homemade Cheesecake with Fresh Berries</p>
                           </td>
                           <td>
                              <p class="text-muted">1360</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Cheesecake with Fresh Berries</p>
                           </td>
                           <td>
                              <p class="text-muted">1310</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Tea Loaf with Fresh Oranges</p>
                           </td>
                           <td>
                              <p class="text-muted">1245</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Cheesecake with Chocolate Cookies</p>
                           </td>
                           <td>
                              <p class="text-muted">1100</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Homemade Cheesecake with Fresh Berries</p>
                           </td>
                           <td>
                              <p class="text-muted">1003</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Homemade Cheesecake with Fresh Berries</p>
                           </td>
                           <td>
                              <p class="text-muted">952</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Cheesecake with Fresh Berries</p>
                           </td>
                           <td>
                              <p class="text-muted">924</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Tea Loaf with Fresh Oranges</p>
                           </td>
                           <td>
                              <p class="text-muted">842</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Cheesecake with Chocolate Cookies</p>
                           </td>
                           <td>
                              <p class="text-muted">810</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="list-item-heading">Homemade Cheesecake with Fresh Berries</p>
                           </td>
                           <td>
                              <p class="text-muted">605</p>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-4">
            <div class="card mb-4 progress-banner">
               <div class="card-body justify-content-between d-flex flex-row align-items-center">
                  <div>
                     <i class="iconsminds-clock mr-2 text-white align-text-bottom d-inline-block"></i>
                     <div>
                        <p class="lead text-white">5 Posts</p>
                        <p class="text-small text-white">Pending for publish</p>
                     </div>
                  </div>
                  <div>
                     <div role="progressbar"
                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="5" aria-valuemax="12"
                        data-show-percent="false">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="card mb-4 progress-banner">
               <div class="card-body justify-content-between d-flex flex-row align-items-center">
                  <div>
                     <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                     <div>
                        <p class="lead text-white">4 Users</p>
                        <p class="text-small text-white">On approval process</p>
                     </div>
                  </div>
                  <div>
                     <div role="progressbar"
                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="4" aria-valuemax="6"
                        data-show-percent="false">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="card mb-4 progress-banner">
               <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                  <div>
                     <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                     <div>
                        <p class="lead text-white">8 Alerts</p>
                        <p class="text-small text-white">Waiting for notice</p>
                     </div>
                  </div>
                  <div>
                     <div role="progressbar"
                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="8" aria-valuemax="10"
                        data-show-percent="false">
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
    
    <?php }else{ ?>
    <div class="row">
        <div class="col-12">
            <h1>Dashboard Content</h1>
            <div class="separator mb-5"></div>
        </div>
        <div class="col-lg-12 col-xl-12">
            <div class="icon-cards-row">
               <div class="glide dashboard-numbers">
                  <div class="glide__track" data-glide-el="track">
                     <ul class="glide__slides">
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-clock"></i>
                                 <p class="card-text mb-0">Pending Posts</p>
                                 <p class="lead text-center">16</p>
                              </div>
                           </a>
                        </li>
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-basket-coins"></i>
                                 <p class="card-text mb-0">Completed Posts</p>
                                 <p class="lead text-center">32</p>
                              </div>
                           </a>
                        </li>
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-arrow-refresh"></i>
                                 <p class="card-text mb-0">Categories</p>
                                 <p class="lead text-center">2</p>
                              </div>
                           </a>
                        </li>
                        <li class="glide__slide">
                           <a href="#" class="card">
                              <div class="card-body text-center">
                                 <i class="iconsminds-mail-read"></i>
                                 <p class="card-text mb-0">New Comments</p>
                                 <p class="lead text-center">25</p>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
        </div>
    </div>
      
       
      
    <?php } ?>
  
 </div>
</main>
<?php
   include 'layout/footer.php';
   ?>