<?php
/*
 * Plugin Name:       My Quant Plugin Test
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sean Manjaly
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 /* Main Plugin File */


//
//
function my_plugin_activate() {

  add_option( 'Activated_Plugin', 'Plugin-Slug' );

  /* activation code here */
}
register_activation_hook( __FILE__, 'my_plugin_activate' );



add_shortcode( 'quant-table', 'display_quant_table_data' );

// this function generates the shortcode output
function display_quant_table_data(  ) {
if(isset($_POST['bigVSubmit']))
{global $wpdb;
  $wpdb->insert(
        'sample_data_screener',
        array(
            'bigValueName' => $_POST['bigVName'],
            'bigValue' => $_POST['bigV'],
        ));
}
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<style>
table, th, td {
  border: 1px solid;
}
span.wpcf7-list-item input[type=”checkbox”] {
-webkit-appearance: checkbox !important;
-O-appearance: checkbox !important;
-moz-appearance: checkbox !important;
display: inline-block !important;
}
</style>
<script src="jquery-1.9.1.min.js">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="modal fade" id="exampleModalForFiltering" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="columnFilteredTable" style="padding-left:170px;padding-right:170px;padding-top:60px;padding-bottom:60px;text-align:center;padding:60px;">

            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="spaceForAppendingForms" style="padding-left:170px;padding-right:170px;padding-top:60px;padding-bottom:60px;overflow-y:scroll;">
  <form action="" method=""><label for="bigVName">Expression description</label>
  <input type="text" name="bigVName" required></input>
    <label for="bigV">Symbol</label>
    <input type="text" name="bigV" required></input>
    <input type="submit" name="bigVSubmit" value="Submit"></input>
</form>
<select name="countPerPages" id="countPerPage">
  <option value="10">10</option>
  <option value="50">50</option>
  <option value="100">100</option>
  <option value="150">150</option>
</select>

  <select name="choosenTable" id="myTable" onchange="getTableColumns()">
    <option value="0">Select a table<option>
  <?php

  global $wpdb;
  $mytables=$wpdb->get_results("SHOW TABLES");
  foreach ($mytables as $mytable)
  {
      foreach ($mytable as $t)
      {
          echo '<option value="'.$t.'">'.$t.'<option>';
      }
  }
   ?>
 </select>
<button type="button" onclick="addFieldButtonFunction()">Add Fields</button>

<button id="getColButton">Get columns</button>

<button id="my-button">View</button>
<button onclick="getTableColumnsForRadio()">Get view columns</button>
<div style="display:flex;" id="positionForTablseColumnViewRadioButton">

</div>
  <div class="multipylyingForms" id="multipylyingFormsUsingClass">

 <div id="positionForDropdownOfColumns">

 </div>
<select class="myCondition">
  <?php
  global $wpdb;
  $mydbConditions = $wpdb;
  $rowsConditions = $mydbConditions->get_results("SELECT * FROM selectconditions");
foreach ($rowsConditions as $valuerowsConditions) {
echo('<option value="'.$valuerowsConditions->conditionSymbol.'">'.$valuerowsConditions->conditionName.'</option>');
}
   ?>
</select>
<input type="text" class="additional" name="additionall" value="1"></input>
<select class="mySecond">
  <?php
  global $wpdb;
  $mydbConditionBig = $wpdb;
  $rowsConditionBig = $mydbConditionBig->get_results("SELECT * FROM bigvalues");
foreach ($rowsConditionBig as $rowsConditionB) {
echo('<option value="'.$rowsConditionB->bigValue.'">'.$rowsConditionB->bigValueName.'</option>');
}
   ?>
</select>


</div>
</div>

<!--

 -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div id="positionForTable">

</div>
<!--


 -->
 <script type="text/javascript">
 let colSelectedOrNot = 0;
    function addFieldButtonFunction(){
//Code for dynamic form creation
      var myTable = document.getElementById("myTable").value;

if((myTable=="0")&&(colSelectedOrNot==0))
{
  alert("Select a table!");
  number.focus();
  return false;
    }
  else if((myTable!="0")&&(colSelectedOrNot==0)) {
    alert("Get columns!");
    number.focus();
    return false;
  }
else {
  var el = $('#multipylyingFormsUsingClass').clone();
                      $('#spaceForAppendingForms').append(el);
}  }
</script>
  <?php


}

/*

Ajax starts

*/
function getAjaxDataTablesFromDatabaseForQuant() {
    // Register the script
    wp_register_script( 'my-quant_ajax_get_table_list_script', get_template_directory_uri() . '/qua.js', array('jquery'), '1.0', true );

       wp_localize_script( 'my-quant_ajax_get_table_list_script', 'my_ajax_quant_get_table_data_object',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce('like-nonce')
        ));
//
//     // Enqueue the script
    wp_enqueue_script( 'my-quant_ajax_get_table_list_script' );

    /*

    */




  ?>
<!--

 -->
  <script type="text/javascript">
   jQuery(document).ready(function($) {
      $('#getColButton').click(function() {
//Get the list of tables
colSelectedOrNot=1;
          var myTable = document.getElementById("myTable").value;
if(myTable!="0")
{
            $.ajax({
                type: 'POST',
                url: my_ajax_quant_get_table_data_object.ajax_url,
                data: {
                    action: 'get_db_tables',
                    nonce : my_ajax_quant_get_table_data_object.nonce,
                        'myTable': myTable ,
                },
                success: function(response) {

                  var myTableColumnShow = document.getElementById("positionForDropdownOfColumns");
                myTableColumnShow.innerHTML=response;
                }
            });
        }
else{
  alert("Select a table first");
  number.focus();
  return false;
}
      });

      }
    )
 </script>

    <?php
}
function getAjaxDataTableColumnsForFiltering()
{
  wp_register_script( 'my-quant_ajax_get_column_list_script', get_template_directory_uri() . '/qua.js', array('jquery'), '1.0', true );

     wp_localize_script( 'my-quant_ajax_get_column_list_script', 'my_ajax_quant_get_table_data_object_for_filter',
      array(
          'ajax_url' => admin_url( 'admin-ajax.php' ),
          'nonce' => wp_create_nonce('like-nonce')
      ));

  // Enqueue the script
  wp_enqueue_script( 'my-quant_ajax_get_column_list_script' );
    ?>
<!--


 -->
 <!--  -->
 <!--

 -->
 <script type="text/javascript">
    function getTableColumnsForRadio() {
var myTableForRadioButton = document.getElementById("myTable").value;
$.ajax({
                type: 'POST',
                url: get_db_tables_column_object.ajax_url,
                data: {
                    action: 'get_db_tables_columns',
                    nonce : get_db_tables_column_object.nonce,
                        'myTableForRadioButton': myTableForRadioButton ,

                },
                success: function(response) {
                  var get_db_tables_columns_for_radio = document.getElementById("positionForTablseColumnViewRadioButton");
                get_db_tables_columns_for_radio.innerHTML=response;
                }
            });
          return true;
        }
            </script>
 <script type="text/javascript">


 </script>




 <?php

}

add_action( 'wp_enqueue_scripts', 'getAjaxDataTableColumnsForFiltering');
// ////////////2
add_action('wp_ajax_get_db_column_filter', 'get_db_column_filter');
add_action('wp_ajax_nopriv_get_db_column_filter', 'get_db_column_filter');
function get_db_column_filter() {
  check_ajax_referer( 'like-nonce', 'nonce' );
  //Obtaining the table name
    $myTableForFilter = $_POST['myTable'];

   global $wpdb;
    $myDataForTabledbForFilter =$wpdb;
    $rowToGetTablesForFilter = $myDataForTabledbForFilter->get_results("SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='local'
    AND `TABLE_NAME`='".$myTableForFilter."';");
    // Response output

$columnListForFilter='<button type="button" class="btn btn-primary" onclick="applyFilterByColumn()">
  Apply Filter
</button><div>';
  foreach($rowToGetTablesForFilter as $rowToGetTableForFilter)
  {
$columnListForFilter.='<label for="'.$rowToGetTableForFilter->COLUMN_NAME.'">'.$rowToGetTableForFilter->COLUMN_NAME.'</label><input type="checkbox" class="forFilterClass" id="'.$rowToGetTableForFilter->COLUMN_NAME.'"><br>';
  }
  $columnListForFilter.="</div>";
  echo $columnListForFilter;

    wp_die();
}
//
add_action( 'wp_enqueue_scripts', 'getAjaxDataTablesFromDatabaseForQuant' );
////////////2
add_action('wp_ajax_get_db_tables', 'get_db_tables');
add_action('wp_ajax_nopriv_get_db_tables', 'get_db_tables');
//
function get_db_tables() {
  check_ajax_referer( 'like-nonce', 'nonce' );
  //Obtaining the table name
    $myTable = $_POST['myTable'];
    //Obtaining the column names
   global $wpdb;
    $myDataForTabledb =$wpdb;
    $rowToGetTables = $myDataForTabledb->get_results("SELECT `COLUMN_NAME`
FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='local'
    AND `TABLE_NAME`='".$myTable."';");
//     // Response output
//
$columnList='<select class="myFirst" name="myFirsts">';
  foreach($rowToGetTables as $rowToGetTable)
  {
$columnList.='<option value="'.$rowToGetTable->COLUMN_NAME.'">'.$rowToGetTable->COLUMN_NAME.'</option>';
  }
  $columnList.="</select>";
  echo $columnList;
    // Don't forget to stop execution afterward
    wp_die();
}
// /////////1
function getAjaxDataFromDatabaseForQuant() {
    // Register the script
    wp_register_script( 'my-quant_ajax-script', get_template_directory_uri() . '/qua.js', array('jquery'), '1.0', true );

    $script_data_array = array(
           'ajax_url' => admin_url( 'admin-ajax.php' ),
       );
       wp_localize_script( 'my-quant_ajax-script', 'my_ajax_quant_get_data_object',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce('like-nonce')
        ));

//     // Enqueue the script
    wp_enqueue_script( 'my-quant_ajax-script' );

    /*

    */
    ?>
  <script type="text/javascript">
     jQuery(document).ready(function($) {
        $('#my-button').click(function() {

          var myTable = document.getElementById("myTable").value;
          var myFirst = document.getElementsByClassName("myFirst");
          var mySecond = document.getElementsByClassName("mySecond");
          var additional = document.getElementsByClassName("additional");
          var myCondition = document.getElementsByClassName("myCondition");
          var countPerPage = document.getElementById("countPerPage").value;


          //Array for myFirst conditions
          var arraymyFirst = [];
          for (var i = 0; i < myFirst.length; i++) {
              arraymyFirst.push(myFirst[i].value);
          }

          // //Array for mySecond values
          var arraymySecond = [];
          for (var i = 0; i < mySecond.length; i++) {
              arraymySecond.push(mySecond[i].value);
          }


//Array for additional values
var arrayAdditional = [];
for (var i = 0; i < additional.length; i++) {
    arrayAdditional.push(additional[i].value);
}

// // //Array for myCondition values
var arraymyCondition = [];
for (var i = 0; i < myCondition.length; i++) {
arraymyCondition.push(myCondition[i].value);
}

// // //Array for myCondition values
var forSelectedFieldsToDisplay=[];
forSelectedFieldsToDisplay = $('input[name=selectedColumns]:checked');
var arrayforSelectedFieldsToDisplay = [];
for (var i = 0; i < forSelectedFieldsToDisplay.length; i++) {
arrayforSelectedFieldsToDisplay.push(forSelectedFieldsToDisplay[i].value);
}

            $.ajax({
                type: 'GET',
                url: my_ajax_quant_get_data_object.ajax_url,
                data: {
                    action: 'get_db_data',
                    nonce : my_ajax_quant_get_data_object.nonce,
                        'myTable':myTable,
                        myFirst: arraymyFirst,
                      mySecond: arraymySecond,
                        additional: arrayAdditional,
                        myCondition:arraymyCondition,
                        arrayforSelectedFieldsToDisplay:arrayforSelectedFieldsToDisplay,
                        'countPerPage':countPerPage,
                },
                success: function(response) {

                  var docz=document.getElementById('positionForTable');
                  docz.innerHTML = response;

                }
            });
        });
     });
</script>
    <?php
}
add_action( 'wp_enqueue_scripts', 'getAjaxDataFromDatabaseForQuant');
// ////////////2
add_action('wp_ajax_get_db_data', 'get_db_data');
add_action('wp_ajax_nopriv_get_db_data', 'get_db_data');
//
function get_db_data() {
  check_ajax_referer( 'like-nonce', 'nonce' );
//   //Get table name
    $myTable = $_GET['myTable'];
    //Get attribute
    $myFirst = $_GET['myFirst'];
//     //Get conditions and values
    $mySecond = $_GET['mySecond'];

    $additional = $_GET['additional'];

    $myCondition = $_GET['myCondition'];
    //Get entries per page
    $countPerPage = $_GET['countPerPage'];

    $arrayforSelectedFieldsToDisplay = $_GET['arrayforSelectedFieldsToDisplay'];
// //  Constructing sql query
//
  $toBeSelected="";
  for($kk=0;$kk<count($arrayforSelectedFieldsToDisplay);$kk++)
  {
    if($kk==(count($arrayforSelectedFieldsToDisplay)-1))
    {
      $toBeSelected.= $arrayforSelectedFieldsToDisplay[$kk];
    }
    else {
      $toBeSelected.= $arrayforSelectedFieldsToDisplay[$kk].",";
    }

  }

    $conditionCount=count($myFirst);
    $selectFromTable = "SELECT ".$toBeSelected." FROM ".$myTable." WHERE ";
  global $wpdb;
    $mydba = $wpdb;

$conCount=$conditionCount-1;
  for($i=0;$i<$conditionCount;$i++) {
    $mySecondHere=intval($mySecond[$i]);
    $additionalHere=intval($additional[$i]);
    $finalAdditional=$mySecondHere*$additionalHere;
    if($i==$conCount)
    {

    $selectFromTable.= $myFirst[$i].$myCondition[$i].$finalAdditional."";
  }
  else{

    $selectFromTable.= $myFirst[$i].$myCondition[$i].$finalAdditional." AND ";
  }

  }
// //
$selectFromTable.= " LIMIT ".$countPerPage."";
    $mydbasNow = $wpdb;

$rowForTablesForIterations = $mydbasNow->get_results($selectFromTable);
// //  Get names of the columns necessary

$countForNumberOfColumns=count($arrayforSelectedFieldsToDisplay);
if(count($rowForTablesForIterations)>0)
{
$jj=0;
      $tableView='<div style="padding-left:30px;color:white;"><table><thead><tr>';


      foreach ( $rowForTablesForIterations as $rowForTablesForIterat  ) {
      // $countForNumberOfColumns=count($rowForTablesForIterat);

            if($jj<$countForNumberOfColumns)
            {
              foreach ( $rowForTablesForIterat as $key => $value ) {

              $tableView.='<th>'.$key.'</th>';
              $jj=$jj+1;
      		  }
          }
          else
          {
            break;
          }
      		}

  $tableView.='</tr><thead><tbody>';

// //Returning the HTML output.
 foreach ( $rowForTablesForIterations as $rowForTablesForIterat  ) {
$ii=0;
$tableView.='<tr>';
		  foreach ( $rowForTablesForIterat as $key => $value ) {
        if($ii==$countForNumberOfColumns)
        {
          break;
        }

        $tableView.='<td class="'.$key.'">'.$value.'</td>';
        $ii=$ii+1;
		  }
        $tableView.='</tr>';
		}

$tableView.='</tbody></table></div>';
  echo $tableView;
}
else {
  echo('No data');
}
// //
    wp_die();
}
/*

Ajax ends

*/
/*
 Ajax starts
*/

function getAjaxDataTablesColumnsFromDatabaseForQuant() {
//     // Register the script
    wp_register_script( 'my-quant_ajax_get_table_column_selected_list_script', get_template_directory_uri() . '/qua.js', array('jquery'), '1.0', true );

       wp_localize_script( 'my-quant_ajax_get_table_column_selected_list_script', 'get_db_tables_column_object',
        array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce' => wp_create_nonce('like-nonce')
        ));
//
//     // Enqueue the script
    wp_enqueue_script( 'my-quant_ajax_get_table_column_selected_list_script' );
// //
//     /*
//
//     */
//     ?>
   <script type="text/javascript">
      function applyFilterByColumn() {
  var myTableForRadioButton = document.getElementById("myTable").value;
$.ajax({
                  type: 'POST',
                  url: get_db_tables_column_object.ajax_url,
                  data: {
                      action: 'get_db_tables_columns',
                      nonce : get_db_tables_column_object.nonce,
                          'myTableForRadioButton': myTableForRadioButton ,

                  },
                  success: function(response) {
                    alert(response);

                    const fieldsToBeSelected=response;
                  for(let i=0;i<fieldsToBeSelected.length;i++)
                  {
                  alert("i"+"="+i);

                    var tds = tr.getElementsByTagName("td");
                    for(var j = 0; j < tds.length; j++) {
                      alert("j"+"="+j);
                        var stringToCheckForCheckboxChecked="#"+fieldsToBeSelected[i];
                                if ($(stringToCheckForCheckboxChecked).is(':checked'))
                                {
                                  tds[i].style.visibility="collapse";
                                }


                      }


                  }
                  }
              });

          }
              </script>
             <?php
//
}

add_action( 'wp_enqueue_scripts', 'getAjaxDataTablesColumnsFromDatabaseForQuant' );
add_action('wp_ajax_get_db_tables_columns', 'get_db_tables_columns');
add_action('wp_ajax_nopriv_get_db_tables_columns', 'get_db_tables_columns');

function get_db_tables_columns() {
        check_ajax_referer( 'like-nonce', 'nonce' );
//         //Get table name
          $myTable = $_POST['myTableForRadioButton'];
//
        global $wpdb;
         $myDataForTabledb =$wpdb;
         $rowToGetTables = $myDataForTabledb->get_results("SELECT `COLUMN_NAME`
     FROM `INFORMATION_SCHEMA`.`COLUMNS`
     WHERE `TABLE_SCHEMA`='local'
         AND `TABLE_NAME`='".$myTable."';");
//          // Response output
//
     $columnList="";
       foreach($rowToGetTables as $rowToGetTable)
       {
// array_push($columnList,$rowToGetTable->COLUMN_NAME);
     $columnList.='<label for="'.$rowToGetTable->COLUMN_NAME.'">'.$rowToGetTable->COLUMN_NAME.'</label>
     <input type="checkbox" class="selectedColumns" id="selectedColumns" name="selectedColumns" value="'.$rowToGetTable->COLUMN_NAME.'" checked /><br>';
       }

       echo $columnList;

          wp_die();
      }
