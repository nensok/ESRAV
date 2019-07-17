<template>
  <div class="container">
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>Resolved Cases</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-import"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>50</h3>
            
                <p>Pending Cases</p>
              </div>
              <div class="icon">
                <i class="fas fa-folder-open"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>200,45500</h3>

                <p>Users</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>75</h3>

                <p>New Cases (Priority)</p>
              </div>
              <div class="icon">
               <i class="fas fa-archive"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!--Calender-->
        <div class="card bg-info">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                <h3 class="card-title">
                  <i class="fas fa-calendar-alt"></i>
                  ESRAV Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-info btn-sm" data-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-info btn-sm" data-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">July 2019</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="06/30/2019" class="day old weekend">30</td><td data-action="selectDay" data-day="07/01/2019" class="day">1</td><td data-action="selectDay" data-day="07/02/2019" class="day">2</td><td data-action="selectDay" data-day="07/03/2019" class="day">3</td><td data-action="selectDay" data-day="07/04/2019" class="day">4</td><td data-action="selectDay" data-day="07/05/2019" class="day">5</td><td data-action="selectDay" data-day="07/06/2019" class="day weekend">6</td></tr><tr><td data-action="selectDay" data-day="07/07/2019" class="day weekend">7</td><td data-action="selectDay" data-day="07/08/2019" class="day">8</td><td data-action="selectDay" data-day="07/09/2019" class="day">9</td><td data-action="selectDay" data-day="07/10/2019" class="day">10</td><td data-action="selectDay" data-day="07/11/2019" class="day">11</td><td data-action="selectDay" data-day="07/12/2019" class="day">12</td><td data-action="selectDay" data-day="07/13/2019" class="day active today weekend">13</td></tr><tr><td data-action="selectDay" data-day="07/14/2019" class="day weekend">14</td><td data-action="selectDay" data-day="07/15/2019" class="day">15</td><td data-action="selectDay" data-day="07/16/2019" class="day">16</td><td data-action="selectDay" data-day="07/17/2019" class="day">17</td><td data-action="selectDay" data-day="07/18/2019" class="day">18</td><td data-action="selectDay" data-day="07/19/2019" class="day">19</td><td data-action="selectDay" data-day="07/20/2019" class="day weekend">20</td></tr><tr><td data-action="selectDay" data-day="07/21/2019" class="day weekend">21</td><td data-action="selectDay" data-day="07/22/2019" class="day">22</td><td data-action="selectDay" data-day="07/23/2019" class="day">23</td><td data-action="selectDay" data-day="07/24/2019" class="day">24</td><td data-action="selectDay" data-day="07/25/2019" class="day">25</td><td data-action="selectDay" data-day="07/26/2019" class="day">26</td><td data-action="selectDay" data-day="07/27/2019" class="day weekend">27</td></tr><tr><td data-action="selectDay" data-day="07/28/2019" class="day weekend">28</td><td data-action="selectDay" data-day="07/29/2019" class="day">29</td><td data-action="selectDay" data-day="07/30/2019" class="day">30</td><td data-action="selectDay" data-day="07/31/2019" class="day">31</td><td data-action="selectDay" data-day="08/01/2019" class="day new">1</td><td data-action="selectDay" data-day="08/02/2019" class="day new">2</td><td data-action="selectDay" data-day="08/03/2019" class="day new weekend">3</td></tr><tr><td data-action="selectDay" data-day="08/04/2019" class="day new weekend">4</td><td data-action="selectDay" data-day="08/05/2019" class="day new">5</td><td data-action="selectDay" data-day="08/06/2019" class="day new">6</td><td data-action="selectDay" data-day="08/07/2019" class="day new">7</td><td data-action="selectDay" data-day="08/08/2019" class="day new">8</td><td data-action="selectDay" data-day="08/09/2019" class="day new">9</td><td data-action="selectDay" data-day="08/10/2019" class="day new weekend">10</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2019</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month active">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2010-2019</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2009</span><span data-action="selectYear" class="year">2010</span><span data-action="selectYear" class="year">2011</span><span data-action="selectYear" class="year">2012</span><span data-action="selectYear" class="year">2013</span><span data-action="selectYear" class="year">2014</span><span data-action="selectYear" class="year">2015</span><span data-action="selectYear" class="year">2016</span><span data-action="selectYear" class="year">2017</span><span data-action="selectYear" class="year">2018</span><span data-action="selectYear" class="year active">2019</span><span data-action="selectYear" class="year old">2020</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>
              <!-- /.card-body -->
        </div>  
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
