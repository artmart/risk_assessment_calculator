<?php
use backend\models\Endofdayfigures;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>

            <div class="row">
            <div class="col-lg-12">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count">4</div>
                  <h3>Active Clients</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">3</div>
                  <h3>Clients Pending</h3>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">1</div>
                  <h3>Clients Completed</h3>
                </div>
              </div>
            </div>
            </div>
          </div>

              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Results Summary</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a href="/invite" target="_blank" class="btn btn-success"><i class="fa fa-plus"></i> Create New Invite</a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>ID</th>
                            <th class="column-title">Client Name</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Status</th>
                            <th class="column-title">Date Completed</th>
                            <th class="column-title">Capacity</th>
                            <th class="column-title">Overal Risk Score </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>111</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">aaa@aa.com</td>
                            <td class=" ">Completed</td>
                            <td class=" ">May 23, 2014 11:47:56 PM </td>
                            <td class=" ">High</td>
                            <td>Moderate</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr>
                            <td>222</td>
                            <td class=" ">John Blank L</td>
                            <td class=" ">aaa@aa.com</td>
                            <td class=" ">Completed</td>
                            <td class=" ">May 23, 2014 11:30:12 PM</td>
                            <td class=" ">High</td>
                            <td>Moderate</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr>
                            <td>333</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">aaa@aa.com</td>
                            <td class=" ">Pending</td>
                            <td class=" ">May 24, 2014 10:55:33 PM</td>
                            <td class=" ">High</td>
                            <td>Moderate</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                          <tr>
                            <td>444</td>
                            <td class=" ">Mike Smith</td>
                            <td class=" ">aaa@aa.com</td>
                            <td class=" ">Completed</td>
                            <td class=" ">May 24, 2014 10:52:44 PM</td>
                            <td class=" ">High</td>
                            <td>Moderate</td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>