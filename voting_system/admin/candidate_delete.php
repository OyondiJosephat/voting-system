<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<?php
 
#  *** GENERATION INFORMATION *** 
#   
#  Project Name..............: voting system
#  Project Source............: C:\Documents and Settings\CSU-A\My Documents\My QwikSites\Projects\voting system\voting system.dbh
#  Project Session ..........: 03B6A788-1390-401D-87E7-13E99BF0F36C
#  Group Name................: Candidate
#  Group GUID................: EAB10141-065C-432D-8B37-958AFA775F5F
#  Group SerialID............: 431
#  Page Name.................: Delete Candidate
#  Page Type.................: 5 - Delete Page
#  Page GUID.................: C24DC54B-3CBE-4EA3-8573-6F8F04D839EA
#  Page SerialID.............: 436
#  Page File Name............: candidate_delete
#   
#  Generated on..............: Monday, October 27, 2008
#  Generation Timestamp......: 2008-27-10 21:46:47
#  Language..................: PHP
#   
#  7 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Id                                       | 5   | [id]                                     | Id                                       |
#  |   1 | Position                                 | 5   | [position]                               | Position                                 |
#  |   2 | Name                                     | 5   | [name]                                   | Name                                     |
#  |   3 | Platform                                 | 5   | [platform]                               | Platform                                 |
#  |   4 | Picture                                  | 5   | [picture]                                | Picture                                  |
#  |   5 | Votecount                                | 5   | [votecount]                              | Votecount                                |
#  |   6 | Sy                                       | 5   | [sy]                                     | Sy                                       |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#   
#  Field Types Definition:
#     0 - TEXT       
#     1 - IMAGE      
#     2 - TEXTBOX    
#     3 - RADIOBUTTON
#     4 - LISTMENU   
#     5 - STATICTEXT 
#     6 - HIDDEN     
#     8 - UPLOAD     
#     7 - DATEPICKER 
#     9 - FIELD      
#    10 - CHECKBOX   
#   
#  *** END OF GENERATION INFORMATION *** 
#   

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
$err_string = "";
$quotechar = "`";
$quotedate = "'";
$sql = "";
$sql_ext = "";
$fields = array();
$fields[0] = "candidate.id";
$fields[1] = "candidate.`position`";
$fields[2] = "candidate.name";
$fields[3] = "candidate.platform";
$fields[4] = "candidate.picture";
$fields[5] = "candidate.votecount";
$fields[6] = "candidate.sy";
$fields = array();
$fields[0] = "candidate.id";
$fields[1] = "candidate.`position`";
$fields[2] = "candidate.name";
$fields[3] = "candidate.platform";
$fields[4] = "candidate.picture";
$fields[5] = "candidate.votecount";
$fields[6] = "candidate.sy";

$fieldcons = array();
$fieldcons[0] = "candidate.id";
$fieldcons[1] = "candidate.`position`";
$fieldcons[2] = "candidate.name";
$fieldcons[3] = "candidate.platform";
$fieldcons[4] = "candidate.picture";
$fieldcons[5] = "candidate.votecount";
$fieldcons[6] = "candidate.sy";

$sql .= " Select\n";
    $sql .= "     candidate.`id`,\n";
    $sql .= "     candidate.`position`,\n";
    $sql .= "     candidate.`name`,\n";
    $sql .= "     candidate.`platform`,\n";
    $sql .= "     candidate.`picture`,\n";
    $sql .= "     candidate.`votecount`,\n";
    $sql .= "     candidate.`sy`\n";
    $sql .= " From\n";
    $sql .= "     candidate   candidate\n";

if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
//Field Related Declarations
$req_Id              = "del_fd0";
$req_Position        = "del_fd1";
$req_Name            = "del_fd2";
$req_Platform        = "del_fd3";
$req_Picture         = "del_fd4";
$req_Votecount       = "del_fd5";
$req_Sy              = "del_fd6";

//Assign Recordset Field Index
$rs_idx_id           = 0;
$rs_idx_position     = 1;
$rs_idx_name         = 2;
$rs_idx_platform     = 3;
$rs_idx_picture      = 4;
$rs_idx_votecount    = 5;
$rs_idx_sy           = 6;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
$qry_string = "";
$value_sql = "";
$currentrow_sql = "";
$hidden_tag = "";
$hiddenrow_tag = "";
$i = 0;
while ($i < mysql_num_fields($result)) {
    $meta = mysql_fetch_field($result);
    $field_name = $meta->name;
    $field_type = $meta->type;
    $type_field = "";
    $type_field = returntype($field_type);
    $quotedata = "";
    switch ($type_field) {
      case "type_datetime": $quotedata = $quotedate; break;
      case "type_string": $quotedata = "'"; break;
      case "type_integer": $quotedata = ""; break;
      case "type_unknown": $quotedata = "'"; break;
      default: $quotedata = "'";
    } 
    if (qsrequest("currentrow_fd" .$i) != "") {
        if ($currentrow_sql == "") {
            $currentrow_sql  = $fields[$i] . " = " . $quotedata . qsrequest("currentrow_fd" . $i) . $quotedata . "";
        } else {
            $currentrow_sql .= " and " . $fields[$i] . " = " . $quotedata . qsrequest("currentrow_fd" . $i) . $quotedata . "";
        }
        $hiddenrow_tag .= "<input type=\"hidden\" name=\"currentrow_fd" . $i . "\" value=\"" . qsrequest("currentrow_fd" . $i) . "\">\n";
    }
    $i++;
}
//Create recordset data 
    if ($result > 0) {mysql_free_result($result);}
    $sql = "";
$sql .= " Select\n";
    $sql .= "     candidate.`id`,\n";
    $sql .= "     candidate.`position`,\n";
    $sql .= "     candidate.`name`,\n";
    $sql .= "     candidate.`platform`,\n";
    $sql .= "     candidate.`picture`,\n";
    $sql .= "     candidate.`votecount`,\n";
    $sql .= "     candidate.`sy`\n";
    $sql .= " From\n";
    $sql .= "     candidate   candidate\n";
    $sql .= " where ".$currentrow_sql ;
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
    $result =  mysql_query($sql) or die("Invalid query");
    if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
    }
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
    $row = mysql_fetch_array($result);

//Check form submit 
if (isset($_POST["act"])) {
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
    $sql  = "";
    $sql  = "delete from " . $quotechar. mysql_field_table($result,0) . $quotechar;
    $sql .= " where ";
    $sql .= qsreplace_backslashes(stripslashes($currentrow_sql));
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
#----get submit url page----
    $submiturl = "./candidate.php?";
    if ($result > 0) {mysql_free_result($result);}
    if ($err_string == "") {
    if (!$result = @mysql_query($sql)){
        $err_string .= "<strong>Error:</strong>while updating<br>" . mysql_error();
// >> START OF "on delete data error" [DELDATAERR001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on delete data error" [DELDATAERR001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
    } else { 
// >> START OF "on delete data success" [DELETEDATASUCCESS001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on delete data success" [DELETEDATASUCCESS001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
    }
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
            header ("Location: $URL");
            exit;
        }
    }
} //end if act
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<Title>Delete Candidate</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<link rel="stylesheet" type="text/css" href="candidate_delete.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\YUI-JSLoader.txt] file -->   
<!-- This file is included in all generated pages, right after JS basic initialization -->   
<!-- If you need more of the Yahoo UI libraries for your own custom use, you may add libraries here. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->
<!-- So you may chose to add other libraries via the 'ClientIncludes' Custom Code insertion point. -->

<!-- Load the YUI Loader scripts needed by dbQwikSite -->   
<script type="text/javascript" src="./js/yahoo-min.js" ></script>
<script type="text/javascript" src="./js/dom-min.js" ></script>
<script type="text/javascript" src="./js/event-min.js" ></script>

<script type="text/javascript">

  // Invoke dbQwikSite Page OnLoad controller as soon as the page is ready 
  // This should always happen first, any user custom-code should run after
  YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>

<!-- END OF STD-Loader.txt -->

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\STD-Loader.txt] file -->   
<!-- This file is included in all generated pages, right after Javascript basic initialization -->   

<!-- You may write JS File Includes, CSS includes or inline JavaScript code as needed. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->

<!-- Add all your customization below -->

	<link rel="stylesheet" type="text/css" href="./css/ContentLayout.css"></link>


<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 7
var _Id                                       = 0;
var _Position                                 = 1;
var _Name                                     = 2;
var _Platform                                 = 3;
var _Picture                                  = 4;
var _Votecount                                = 5;
var _Sy                                       = 6;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Id] = "Id";
fieldPrompts[_Position] = "Position";
fieldPrompts[_Name] = "Name";
fieldPrompts[_Platform] = "Platform";
fieldPrompts[_Picture] = "Picture";
fieldPrompts[_Votecount] = "Votecount";
fieldPrompts[_Sy] = "Sy";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Id] = "Id";
fieldTechNames[_Position] = "Position";
fieldTechNames[_Name] = "Name";
fieldTechNames[_Platform] = "Platform";
fieldTechNames[_Picture] = "Picture";
fieldTechNames[_Votecount] = "Votecount";
fieldTechNames[_Sy] = "Sy";

// This function dynamically assigns element 'ID' attributes to all relevant elements
function qsAssignElementIDs() {

  // STEP 1: Assign an ID to all field PROMPTS (TD captions)
  // Scan all table TD tags for those that match field prompts
  var TDs = document.getElementsByTagName("td");
  for (var i=0; i < TDs.length; i++) {
    var element = TDs[i];
    // Check if the TD found is one of the Page Items header
    // This can only be an approximation as some TDs other than the actual field prompts
    // may contain the same caption. In that case all TDs found will carry the same ID.
    if (element.className == "ThRows" || element.className == "TrOdd") {
      for (var f=0; f < qsPageItemsCount; f++) {
        if (element.innerHTML == fieldPrompts[f]) {
            element.id = fieldTechNames[f] + "_caption_cell";
          element.innerHTML = "<div id='" + fieldTechNames[f] + "_caption_div'>" + element.innerHTML + "</div>";
        }
      }
    }
  }

  // STEP 2: Assign an ID to all Input controls on the form
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_delete_form")[0];   //Define Form Object by Name.







}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Delete Candidate -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]-->
<!-- << END OF "Delete Candidate -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]-->




<script>

function usrEvent__Delete_Candidate__onload() {
  // >> START OF "Delete Candidate -> On Load" [onload] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
  // << END OF "Delete Candidate -> On Load" [onload] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
}



function usrEvent__Delete_Candidate__onunload() {
  // >> START OF "Delete Candidate -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
  // << END OF "Delete Candidate -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
}



function usrEvent__Delete_Candidate__onresize() {
  // >> START OF "Delete Candidate -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
  // << END OF "Delete Candidate -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
}



// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() {   
}



// This function controls the OnResize event dispatching
function qsPageOnResizeController() {   
   var lastResult = false                              
   return true;                                        
}                                                      



// This function controls the OnLoad events dispatching
function qsPageOnLoadController() {   
   var lastResult = false                              

   // Invoke the technical field names abstraction initialization
   qsPageItemsAbstraction();


   // Invoke the Element IDs assignment function
   qsAssignElementIDs();

   // Invoke the Page Items custom events assignments
   qsAssignPageItemEvents();
   // Assign Event Handlers for page-level events
   YAHOO.util.Event.addListener(window, "beforeunload", qsPageOnUnloadController);
   YAHOO.util.Event.addListener(window, "resize", qsPageOnResizeController);
   // Set focus on first enterable page item available

   return true;                                        
}                                                      










function usrEvent__Delete_Candidate__onsubmit(frm) {
  // >> START OF "Delete Candidate -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
  // << END OF "Delete Candidate -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
}



function usrEvent__Delete_Candidate__onreset() {
  // >> START OF "Delete Candidate -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
  // << END OF "Delete Candidate -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA]
}



// This function controls the OnSubmit event dispatching
function qsFormOnSubmitController(frm) {                 
   var lastResult = false                              
   return true;                                        
}                                                      



// This function controls the OnReset event dispatching
function qsPageOnResetController() {   
   var lastResult = false                              
   return true;                                        
}                                                      


</script>

<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<BODY>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<Center>
<center><hr /><font size="5">
Delete Candidate
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>

<?php
// >> START OF "before delete form" [FRMDEL001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before delete form" [FRMDEL001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<Form name="qs_delete_form" method="post" action="./candidate_delete.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
print $hidden_tag;
print $hiddenrow_tag;
?>
<?php
// >> START OF "before data table" [DATATABLE001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data table" [DATATABLE001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Delete Candidate</td>
</tr>
<?php
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>
<tr>
<td class="ThRows">Id</td>
<?php
$itemvalue = "" . number_format($row[0],0,".",",") . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Id -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [F1BC5826-60AC-4DBA-B518-26357DAA8504] [Id]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Id -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [F1BC5826-60AC-4DBA-B518-26357DAA8504] [Id]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Position</td>
<?php
$itemvalue = "" . $row[1] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [9A29F1A5-1CF9-485E-9FD1-99F0BE5AE09E] [Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [9A29F1A5-1CF9-485E-9FD1-99F0BE5AE09E] [Position]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Name</td>
<?php
$itemvalue = "" . $row[2] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [757878EA-36E5-4877-8BBE-D3A657E93BB5] [Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [757878EA-36E5-4877-8BBE-D3A657E93BB5] [Name]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Platform</td>
<?php
$itemvalue = "" . $row[3] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [E35E4DC8-7B98-4D9F-B153-6EB84C45EC47] [Platform]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [E35E4DC8-7B98-4D9F-B153-6EB84C45EC47] [Platform]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Picture</td>
<?php
$itemvalue = "" . $row[4] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Picture -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [E08AE0E4-FA33-46E5-B527-14AC02E188C4] [Picture]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Picture -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [E08AE0E4-FA33-46E5-B527-14AC02E188C4] [Picture]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Votecount</td>
<?php
$itemvalue = "" . number_format($row[5],0,".",",") . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Votecount -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [3A316ECE-8432-461A-9262-64F757FABFC7] [Votecount]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Votecount -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [3A316ECE-8432-461A-9262-64F757FABFC7] [Votecount]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Sy</td>
<?php
$itemvalue = "" . $row[6] . "";
if ($itemvalue == "") {
    $itemvalue = "&nbsp;";
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [1616245D-F893-4BB1-9926-708100F10247] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [1616245D-F893-4BB1-9926-708100F10247] [Sy]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<?php
#----get back url page----
  $backurl = "./candidate.php?";
?>
<tr>
<td class="ThRows">&nbsp;</td>
<td class="TrOdd" align=Default>
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Delete">&nbsp;&nbsp;
</td>
</tr>
</Table><br>
<?php
// >> START OF "after data table" [DATATABLE001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data table" [DATATABLE001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<?php
// >> START OF "after delete form" [FRMDEL001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after delete form" [FRMDEL001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
</Form>
<?php
if ($result > 0) {mysql_free_result($result);}
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [C24DC54B-3CBE-4EA3-8573-6F8F04D839EA] [Delete Candidate]
?>
