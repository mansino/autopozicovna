<div class="col-fixed-350">
  <div class="form_wrap custom_border box_shadow">
    <p class="header_title">VEHICLE RESERVATION</p>
    <div class="wrap">
      <div class="form-group">
        <label for="vehicle">Select a vehicle</label>
        <select class="form-control shadow-none" id="vehicle">
          <option value="" selected disabled>Vehicle</option>
          <?php
          if ($result = mysqli_query($conn, "SELECT * FROM cars")) {
            foreach($result as $item) {
              echo '<option value="' . $item['pk'] . '">' . $item['name'] . '</option>';
            }
            mysqli_free_result($result);
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="startLocation">Hire start location</label>
        <select class="form-control shadow-none" id="startLocation">
          <option value="" selected disabled>Location</option>
          <option>Default select</option>
        </select>
      </div>
      <div class="row">
        <div class="col">
          <div class="flex_wrap">
            <div>
              <label for="startDate">Hire start date</label>
              <div class="input-group date" data-provide="datepicker" id="startDate">
                <input type="text" class="form-control shadow-none">
                <div class="input-group-addon">
                  <i class="fa fa-calendar-o fa-lg"></i>
                </div>
              </div>
            </div>
            <div>
              <p class="label">Hire start time</p>
              <select class="form-control shadow-none" id="startTimeH" name="startTimeH">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
              </select>
              <select class="form-control shadow-none" id="startTimeMin" name="startTimeMin">
                <option>00</option>
                <option>05</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
                <option>30</option>
                <option>35</option>
                <option>40</option>
                <option>45</option>
                <option>50</option>
                <option>55</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="endLocation">Hire end location</label>
        <select class="form-control shadow-none" id="endLocation">
          <option value="" selected disabled>Location</option>
          <option>Default select</option>
        </select>
      </div>
      <div class="row">
        <div class="col">
          <div class="flex_wrap">
            <div>
              <label for="endDate">Hire end date</label>
              <div class="input-group date" data-provide="datepicker" id="endDate">
                <input type="text" class="form-control shadow-none">
                <div class="input-group-addon">
                  <i class="fa fa-calendar-o fa-lg"></i>
                </div>
              </div>
            </div>
            <div>
              <p class="label">Hire start time</p>
              <select class="form-control shadow-none" name="endTimeH" id="endTimeH">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
              </select>
              <select class="form-control shadow-none" name="endTimeMin" id="endTimeMin">
                <option>00</option>
                <option>05</option>
                <option>10</option>
                <option>15</option>
                <option>25</option>
                <option>30</option>
                <option>35</option>
                <option>40</option>
                <option>45</option>
                <option>50</option>
                <option>55</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col controls_">
          <p class="float-left">Period of 2 days</p>
          <button class="confirm_btn float-right" type="button" role="button">GET A QUOTE</button>
        </div>
      </div>
    </div>
  </div>
</div>
