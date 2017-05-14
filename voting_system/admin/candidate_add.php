<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<?php

require('qs_connection.php');
require('qs_functions.php');

@session_start();

$row = "";
$err_string = "";
$updateCond = "";
$RDBMS_Type= "MySQL"; 
if (isset($_GET["page"])) {
    $current_page = $_GET["page"];
} elseif (isset($_POST["page"])) {
    $current_page = $_POST["page"];
} else {
    $current_page = 1;
}
$quotechar = "`";
$quotedate = "'";
$hidden_tag = "";
$result = "";
$sql = "";
$sql_ext = "";
$formatdate = array();
$formatdate[1] = "";
$formatdate[2] = "";
$formatdate[3] = "";
$formatdate[4] = "";
$formatdate[6] = "";
$seperatedate = array();
$seperatedate[1] = " ";
$seperatedate[2] = " ";
$seperatedate[3] = " ";
$seperatedate[4] = " ";
$seperatedate[6] = " ";
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

//Field Related Declarations
$req_Position        = "add_fd1";
$req_Name            = "add_fd2";
$req_Platform        = "add_fd3";
$req_Picture         = "add_fd4";
$req_Sy              = "add_fd6";

//Assign Recordset Field Index
$rs_idx_id           = 0;
$rs_idx_position     = 1;
$rs_idx_name         = 2;
$rs_idx_platform     = 3;
$rs_idx_picture      = 4;
$rs_idx_votecount    = 5;
$rs_idx_sy           = 6;

if (isset($_POST["act"])) {
   $ProcessForm  = "Y"; 
   if ($ProcessForm  == "Y") { 
if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}

$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");
$qry_string = "";
$insert_sql = "";
$value_sql = "";
$i = 0;
$SourceFileUpload = array();
$DestFileUpload = array();
$NewFieldUpload = array();
 
//Set initial value for array
$SourceFileUpload[0] = "";
$DestFileUpload[0] = "";
$NewFieldUpload[0] = "";
$SourceFileUpload[1] = "";
$DestFileUpload[1] = "";
$NewFieldUpload[1] = "";
$SourceFileUpload[2] = "";
$DestFileUpload[2] = "";
$NewFieldUpload[2] = "";
$SourceFileUpload[3] = "";
$DestFileUpload[3] = "";
$NewFieldUpload[3] = "";
$SourceFileUpload[4] = "";
$DestFileUpload[4] = "";
$NewFieldUpload[4] = "";
 
while ($i < mysql_num_fields($result)) {
    $meta = mysql_fetch_field($result);
    $field_name = $meta->name;
    $field_type = $meta->type;
    $type_field = "";
    $type_field = returntype($field_type);
    if (qsvalidRequest("search_fd" .$i)) {
        if ($qry_string == "") {
            $qry_string = "search_fd" . $i . "=" . urlencode(stripslashes(qsrequest("search_fd" . $i)));
        } else {
            $qry_string .= "&search_fd" .$i . "=" . urlencode(stripslashes(qsrequest("search_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"search_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("search_fd" . $i))) . "\">\n";
        if ($qry_string == "") {
            $qry_string = "multisearch_fd" . $i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        } else {
            $qry_string .= "&multisearch_fd" .$i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"multisearch_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("multisearch_fd" . $i))) . "\">\n";
    }
    if (qsvalidRequest("add_fd" . $i)) {
        $idata = qsrequest("add_fd" . $i);
        if ($meta) {
            if ($type_field == "type_datetime") {


                    if ($insert_sql == "") {
                        $insert_sql .= $quotechar . $field_name . $quotechar;
                        $value_sql  .= $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) .  $quotedate;
                    } else {
                        $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                        $value_sql  .= "," . $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) .$quotedate;
                    }
            } elseif ($type_field == "type_integer") {
                $idata = QSConvert2EngNumber($idata); 
// >> START OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]

                if (is_numeric($idata)) {
                    if ($insert_sql == "") {
                        $insert_sql .= $quotechar . $field_name . $quotechar;
                        $value_sql  .= $idata;
                    } else {
                        $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                        $value_sql  .= "," . $idata;
                    }
                } else {
                    $err_string .= "<strong>Error:</strong>while adding<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            } elseif ($type_field == "type_string") {


                if ($insert_sql == "") {
                    $insert_sql .= $quotechar . $field_name . $quotechar;
                    $value_sql  .= "'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                } else {
                    $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                    $value_sql  .= ",'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                }
            } else {


                if ($insert_sql == "") {
                    $insert_sql .= $quotechar . $field_name . $quotechar;
                    $value_sql  .= "'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                } else {
                    $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                    $value_sql  .= ",'" . ereg_replace("'","''",stripslashes($idata)) . "'";
                }
            }

        }
    } else {
        if ((strtolower($field_type) != "int identity")
         && (strtolower($field_type) != "autoincrement")
         && (strtolower($field_type) != "counter")) {
            if ($insert_sql == "") {
                $insert_sql .= $quotechar . $field_name . $quotechar;
                $value_sql  .= 0;
            } else {
                $insert_sql .= "," . $quotechar . $field_name . $quotechar;
                $value_sql  .= ", null";
            }
        }
    }
$i++;
}
if(isset($_POST['QS_Submit']))
{
$sql  = "";
$sql  = "insert into " . $quotechar. mysql_field_table($result,0) . $quotechar;
$sql .= " (" . $insert_sql . ")";
$sql .= " values";
$sql .= " (" . $value_sql . ")";

    $submiturl = "./candidate.php?";
    if ($result > 0) {mysql_free_result($result);}
    if (!$result = @mysql_query($sql)){
        $err_string .= "<strong>Error:</strong>while adding<br>" . mysql_error();
// >> START OF "on add data error" [ADDDATAERR001] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on add data error" [ADDDATAERR001] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
    } else { 
// >> START OF "on add data success" [ADDDATASUCCESS001] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on add data success" [ADDDATASUCCESS001] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
    }
    
    //Start update data of upload field
        $value_sql = "";
        $max_id = -1;
        $max_id = GetLastRecordID($RDBMS_Type, "Direct", "candidate", "id", $conn );
        $updateCond = "";
        $updateCond = "id=". $max_id;
if($_FILES['upload_fd4']['name'] != "") {
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
  if ($updateCond != "") {
    $sql .= " where " . $updateCond;
  }
    $result =  mysql_query($sql) or die("Invalid query");
    $row = mysql_fetch_array($result);
$uploadDir = "pictures/";
$optUpdate = 1;
$maxFileSize = 2000000;
$fieldFileName = "" . $row[2] . "";
if($_FILES['upload_fd4']['name'] <> "") {
if($_FILES['upload_fd4']['size'] <= $maxFileSize) {
    $ext = substr( $_FILES['upload_fd4']['name'], strrpos( $_FILES['upload_fd4']['name'], "." )+1 );
    $ext1 = substr( $fieldFileName, strrpos( $fieldFileName, "." )+1 );
    if ($ext1 == "") {
        $newFileName = $fieldFileName.".".strtolower($ext);
    }
    elseif ($ext1 == $ext) {
        $newFileName = $fieldFileName;
    }
    else {
        $newFileName = $fieldFileName.".".strtolower($ext); // change the extention to lower case
    }
    $uploadFile = $uploadDir.$newFileName;
 	 if (move_uploaded_file($_FILES['upload_fd4']['tmp_name'], $uploadFile)) // Success Upload
    {
        $meta = mysql_fetch_field($result,4);
		     $field_name  = $meta->name;
        if ($value_sql == "") {
		        if ($optUpdate == 0) { // Update with full path
			          $value_sql .= $quotechar.$field_name.$quotechar." = '".$uploadFile."'"  ;
		        } elseif ($optUpdate == 1) { // Update with file name only
			          $value_sql .= $quotechar.$field_name.$quotechar." = '".$newFileName."'"  ;
		        } else {
			          #$value_sql .= $quotechar.$field_name.$quotechar." = '".$row[4]."'"  ;
	          }
	       }
        else {
		        if ($optUpdate == 0) { // Update with full path
			          $value_sql .= ", ".$quotechar.$field_name.$quotechar." = '".$uploadFile."'"  ;
		        } elseif ($optUpdate == 1) { // Update with file name only
			          $value_sql .= ", ".$quotechar.$field_name.$quotechar." = '".$newFileName."'"  ;
		        } else {
			          #$value_sql .= ", ".$quotechar.$field_name.$quotechar." = '".$row[4]."'"  ;
	          }
	       }
    }
	   else // Fail in upload
	   {
		     $err_string = 	"Cannot upload file! There is problem occured when upload."	;
	   }
    } else {
        $err_string = "<font color= red>Your file size is bigger than the maximum size(".$maxFileSize." byte) that we allow to upload</font>";
    }
}
}

if (($err_string=="")&&($value_sql!="")) {
    $sql  = "";
    $sql  = "update " . $quotechar . mysql_field_table($result,0) . $quotechar;
    $sql .= " set " . $value_sql;
    $sql .= " where ";
    $sql .= $updateCond;
    if ($result > 0) {mysql_free_result($result);}
    if (!$result = @mysql_query($sql)){
        $err_string .= "<strong>Error:</strong>while updating<br>" . mysql_error();
    }
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
  } //end if ProcessForm
}
} //end if act
?>
<HTML>
<?php

?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<Title>Add Candidate</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<link rel="stylesheet" type="text/css" href="candidate_add.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
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
var qsPageItemsCount = 5
var _Position                                 = 0;
var _Name                                     = 1;
var _Platform                                 = 2;
var _Picture                                  = 3;
var _Sy                                       = 4;
var _id                                       = 5;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Position] = "Position";
fieldPrompts[_Name] = "Name";
fieldPrompts[_Platform] = "Platform";
fieldPrompts[_Picture] = "Picture";
fieldPrompts[_Sy] = "Sy";
fieldPrompts[_id] = "id";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Position] = "Position";
fieldTechNames[_Name] = "Name";
fieldTechNames[_Platform] = "Platform";
fieldTechNames[_Picture] = "Picture";
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
  document.getElementsByName("add_fd1")[0].id = fieldTechNames[_Position];
  document.getElementsByName("add_fd2")[0].id = fieldTechNames[_Name];
  document.getElementsByName("add_fd3")[0].id = fieldTechNames[_Platform];
  document.getElementsByName("upload_fd4")[0].id = fieldTechNames[_Picture];
  document.getElementsByName("add_fd6")[0].id = fieldTechNames[_Sy];
  document.getElementsByName("add_fd7")[0].id = fieldTechNames[_id];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_add_form")[0];   //Define Form Object by Name.
  pgitm_Position                           = document.getElementsByName("add_fd1")[0];
  pgitm_Name                               = document.getElementsByName("add_fd2")[0];
  pgitm_Platform                           = document.getElementsByName("add_fd3")[0];
  pgitm_Picture                            = document.getElementsByName("upload_fd4")[0];
  pgitm_Sy                                 = document.getElementsByName("add_fd6")[0];
  pgitm_id                                 = document.getElementsByName("add_fd7")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Add Candidate ->
<style type="text/css">
<!
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}

</style>
-->
 <!--Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]-->
<!-- << END OF "Add Candidate -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]-->




<script language="javascript">
function Trim(s){
    var temp = " ";
    var i = 0;
    while ((temp == " ") && (i <= s.length)) {
        temp = s.charAt(i);
        i++;
    }
    s = s.substring(i - 1, s.length);
    return(s);
}
function check(frm) {
    var szAlert = "Invalid\n";
    var nIndex = 0;
    if (!RequiredField(frm.add_fd1.value)) {
        nIndex++;
        szAlert += "- " +"'Position' cannot be blank\n";
    }
    if (!RequiredField(frm.add_fd2.value)) {
        nIndex++;
        szAlert += "- " +"'Name' cannot be blank\n";
    }
    if (!RequiredField(frm.add_fd3.value)) {
        nIndex++;
        szAlert += "- " +"'Platform' cannot be blank\n";
    }
		
    if (!RequiredField(frm.add_fd6.value)) {
        nIndex++;
        szAlert += "- " +"'Sy' cannot be blank\n";
    }
    if (!RequiredField(frm.add_fd7.value)) {
        nIndex++;
        szAlert += "- " +"'id' cannot be blank\n";
    }
    if(nIndex > 0) {
       	alert(szAlert) ;
      	return false ;
    }
    return true ;
}
</script>
<script src="validate.js"></script>

<script>

function usrEvent__Add_Candidate__onload() {
  // >> START OF "Add Candidate -> On Load" [onload] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
  // << END OF "Add Candidate -> On Load" [onload] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
}



function usrEvent__Add_Candidate__onunload() {
  // >> START OF "Add Candidate -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
  // << END OF "Add Candidate -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
}



function usrEvent__Add_Candidate__onresize() {
  // >> START OF "Add Candidate -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
  // << END OF "Add Candidate -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
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
  pgitm_Position.focus();
   return true;                                        
}                                                      


function usrEvent__Position__onfocus(HTMLElement) {
  // >> START OF "Position -> On Focus" [onfocus] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Focus" [onfocus] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onblur(HTMLElement) {
  // >> START OF "Position -> On Blur (loss of focus)" [onblur] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Blur (loss of focus)" [onblur] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onclick(HTMLElement) {
  // >> START OF "Position -> On Click" [onclick] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Click" [onclick] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__ondblclick(HTMLElement) {
  // >> START OF "Position -> On Double Click" [ondblclick] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Double Click" [ondblclick] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onkeydown(HTMLElement) {
  // >> START OF "Position -> On Key Down" [onkeydown] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Key Down" [onkeydown] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onkeypress(HTMLElement) {
  // >> START OF "Position -> On Key Press" [onkeypress] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Key Press" [onkeypress] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onkeyup(HTMLElement) {
  // >> START OF "Position -> On Key Up" [onkeyup] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Key Up" [onkeyup] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onchange(HTMLElement) {
  // >> START OF "Position -> On Change" [onchange] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Change" [onchange] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onmousedown(HTMLElement) {
  // >> START OF "Position -> On Mouse Down" [onmousedown] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Mouse Down" [onmousedown] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onmousemove(HTMLElement) {
  // >> START OF "Position -> On Mouse Move" [onmousemove] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Mouse Move" [onmousemove] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onmouseout(HTMLElement) {
  // >> START OF "Position -> On Mouse Out" [onmouseout] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Mouse Out" [onmouseout] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onmouseover(HTMLElement) {
  // >> START OF "Position -> On Mouse Over" [onmouseover] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Mouse Over" [onmouseover] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}
function usrEvent__Position__onmouseup(HTMLElement) {
  // >> START OF "Position -> On Mouse Up" [onmouseup] [Position] [START] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
  // << END OF "Position -> On Mouse Up" [onmouseup] [Position] [STOP] [JS] [DEC645AD-1B31-4549-80B8-A2A18F32116B]
}

function usrEvent__Name__onfocus(HTMLElement) {
  // >> START OF "Name -> On Focus" [onfocus] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Focus" [onfocus] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onblur(HTMLElement) {
  // >> START OF "Name -> On Blur (loss of focus)" [onblur] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Blur (loss of focus)" [onblur] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onclick(HTMLElement) {
  // >> START OF "Name -> On Click" [onclick] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Click" [onclick] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__ondblclick(HTMLElement) {
  // >> START OF "Name -> On Double Click" [ondblclick] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Double Click" [ondblclick] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onkeydown(HTMLElement) {
  // >> START OF "Name -> On Key Down" [onkeydown] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Key Down" [onkeydown] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onkeypress(HTMLElement) {
  // >> START OF "Name -> On Key Press" [onkeypress] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Key Press" [onkeypress] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onkeyup(HTMLElement) {
  // >> START OF "Name -> On Key Up" [onkeyup] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Key Up" [onkeyup] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onchange(HTMLElement) {
  // >> START OF "Name -> On Change" [onchange] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Change" [onchange] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onmousedown(HTMLElement) {
  // >> START OF "Name -> On Mouse Down" [onmousedown] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Mouse Down" [onmousedown] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onmousemove(HTMLElement) {
  // >> START OF "Name -> On Mouse Move" [onmousemove] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Mouse Move" [onmousemove] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onmouseout(HTMLElement) {
  // >> START OF "Name -> On Mouse Out" [onmouseout] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Mouse Out" [onmouseout] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onmouseover(HTMLElement) {
  // >> START OF "Name -> On Mouse Over" [onmouseover] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Mouse Over" [onmouseover] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onmouseup(HTMLElement) {
  // >> START OF "Name -> On Mouse Up" [onmouseup] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Mouse Up" [onmouseup] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}
function usrEvent__Name__onselect(HTMLElement) {
  // >> START OF "Name -> On Select" [onselect] [Name] [START] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
  // << END OF "Name -> On Select" [onselect] [Name] [STOP] [JS] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2]
}

function usrEvent__Platform__onfocus(HTMLElement) {
  // >> START OF "Platform -> On Focus" [onfocus] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Focus" [onfocus] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onblur(HTMLElement) {
  // >> START OF "Platform -> On Blur (loss of focus)" [onblur] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Blur (loss of focus)" [onblur] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onclick(HTMLElement) {
  // >> START OF "Platform -> On Click" [onclick] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Click" [onclick] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__ondblclick(HTMLElement) {
  // >> START OF "Platform -> On Double Click" [ondblclick] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Double Click" [ondblclick] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onkeydown(HTMLElement) {
  // >> START OF "Platform -> On Key Down" [onkeydown] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Key Down" [onkeydown] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onkeypress(HTMLElement) {
  // >> START OF "Platform -> On Key Press" [onkeypress] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Key Press" [onkeypress] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onkeyup(HTMLElement) {
  // >> START OF "Platform -> On Key Up" [onkeyup] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Key Up" [onkeyup] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onchange(HTMLElement) {
  // >> START OF "Platform -> On Change" [onchange] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Change" [onchange] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onmousedown(HTMLElement) {
  // >> START OF "Platform -> On Mouse Down" [onmousedown] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Mouse Down" [onmousedown] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onmousemove(HTMLElement) {
  // >> START OF "Platform -> On Mouse Move" [onmousemove] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Mouse Move" [onmousemove] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onmouseout(HTMLElement) {
  // >> START OF "Platform -> On Mouse Out" [onmouseout] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Mouse Out" [onmouseout] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onmouseover(HTMLElement) {
  // >> START OF "Platform -> On Mouse Over" [onmouseover] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Mouse Over" [onmouseover] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onmouseup(HTMLElement) {
  // >> START OF "Platform -> On Mouse Up" [onmouseup] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Mouse Up" [onmouseup] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}
function usrEvent__Platform__onselect(HTMLElement) {
  // >> START OF "Platform -> On Select" [onselect] [Platform] [START] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
  // << END OF "Platform -> On Select" [onselect] [Platform] [STOP] [JS] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF]
}

function usrEvent__Picture__onfocus(HTMLElement) {
  // >> START OF "Picture -> On Focus" [onfocus] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Focus" [onfocus] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onblur(HTMLElement) {
  // >> START OF "Picture -> On Blur (loss of focus)" [onblur] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Blur (loss of focus)" [onblur] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onclick(HTMLElement) {
  // >> START OF "Picture -> On Click" [onclick] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Click" [onclick] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__ondblclick(HTMLElement) {
  // >> START OF "Picture -> On Double Click" [ondblclick] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Double Click" [ondblclick] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onkeydown(HTMLElement) {
  // >> START OF "Picture -> On Key Down" [onkeydown] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Key Down" [onkeydown] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onkeypress(HTMLElement) {
  // >> START OF "Picture -> On Key Press" [onkeypress] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Key Press" [onkeypress] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onkeyup(HTMLElement) {
  // >> START OF "Picture -> On Key Up" [onkeyup] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Key Up" [onkeyup] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onchange(HTMLElement) {
  // >> START OF "Picture -> On Change" [onchange] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Change" [onchange] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onmousedown(HTMLElement) {
  // >> START OF "Picture -> On Mouse Down" [onmousedown] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Mouse Down" [onmousedown] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onmousemove(HTMLElement) {
  // >> START OF "Picture -> On Mouse Move" [onmousemove] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Mouse Move" [onmousemove] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onmouseout(HTMLElement) {
  // >> START OF "Picture -> On Mouse Out" [onmouseout] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Mouse Out" [onmouseout] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onmouseover(HTMLElement) {
  // >> START OF "Picture -> On Mouse Over" [onmouseover] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Mouse Over" [onmouseover] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}
function usrEvent__Picture__onmouseup(HTMLElement) {
  // >> START OF "Picture -> On Mouse Up" [onmouseup] [Picture] [START] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
  // << END OF "Picture -> On Mouse Up" [onmouseup] [Picture] [STOP] [JS] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A]
}

function usrEvent__Sy__onfocus(HTMLElement) {
  // >> START OF "Sy -> On Focus" [onfocus] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Focus" [onfocus] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onblur(HTMLElement) {
  // >> START OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onclick(HTMLElement) {
  // >> START OF "Sy -> On Click" [onclick] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Click" [onclick] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__ondblclick(HTMLElement) {
  // >> START OF "Sy -> On Double Click" [ondblclick] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Double Click" [ondblclick] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onkeydown(HTMLElement) {
  // >> START OF "Sy -> On Key Down" [onkeydown] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Key Down" [onkeydown] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onkeypress(HTMLElement) {
  // >> START OF "Sy -> On Key Press" [onkeypress] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Key Press" [onkeypress] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onkeyup(HTMLElement) {
  // >> START OF "Sy -> On Key Up" [onkeyup] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Key Up" [onkeyup] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onchange(HTMLElement) {
  // >> START OF "Sy -> On Change" [onchange] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Change" [onchange] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onmousedown(HTMLElement) {
  // >> START OF "Sy -> On Mouse Down" [onmousedown] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Mouse Down" [onmousedown] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onmousemove(HTMLElement) {
  // >> START OF "Sy -> On Mouse Move" [onmousemove] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Mouse Move" [onmousemove] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onmouseout(HTMLElement) {
  // >> START OF "Sy -> On Mouse Out" [onmouseout] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Mouse Out" [onmouseout] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onmouseover(HTMLElement) {
  // >> START OF "Sy -> On Mouse Over" [onmouseover] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Mouse Over" [onmouseover] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onmouseup(HTMLElement) {
  // >> START OF "Sy -> On Mouse Up" [onmouseup] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Mouse Up" [onmouseup] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}
function usrEvent__Sy__onselect(HTMLElement) {
  // >> START OF "Sy -> On Select" [onselect] [Sy] [START] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
  // << END OF "Sy -> On Select" [onselect] [Sy] [STOP] [JS] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE]
}


function usrEvent__Add_Candidate__onsubmit(frm) {
  // >> START OF "Add Candidate -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
  // << END OF "Add Candidate -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
}



function usrEvent__Add_Candidate__onreset() {
  // >> START OF "Add Candidate -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
  // << END OF "Add Candidate -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [07385BCC-B051-4DA5-A76A-6AC2805C875E]
}



// This function controls the OnSubmit event dispatching
function qsFormOnSubmitController(frm) {                 
   var lastResult = false                              
   // Call the standard dbQwikSite form validation rules
   lastResult = check(frm);                            
   if (lastResult == false) {                          
      return false;                                    
   }                                                   
   return true;                                        
}                                                      



// This function controls the OnReset event dispatching
function qsPageOnResetController() {   
   var lastResult = false                              
   return true;                                        
}                                                      


</script>

<script language='javascript' src='qwikcalendar.js'></script>
<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<Center>
<center><hr />
  <span class="style1"><font size="5">
Add Candidate
  </font></span>
  <hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php

?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php

?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php

?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php

?>


<script>
function getURLParam(strParamName){
var strReturn = "";
var strHref = window.location.href;
if ( strHref.indexOf("?") > -1 ){
  var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
  var aQueryString = strQueryString.split("&");
  for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
    if (
	aQueryString[iParam].indexOf(strParamName + "=") > -1 ){
      var aParam = aQueryString[iParam].split("=");
      strReturn = aParam[1];
      break;
    }
  }
}
return strReturn;
}
</script>


<Form name="qs_add_form" method="post" action="./candidate_add.php"  enctype="multipart/form-data" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php

?>
<?php
print $hidden_tag;
?>
<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Add Candidate</td>
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
<td class="ThRows">Student No.</td>
<td align="left" class="TrOdd"><input name="idno" type="text" id="idno" style="font-weight:bold" onChange="this.form.submit()" value="<?php echo $_POST['idno'] ?>" size="15" ></td>
</tr>
<tr>
<?php 
if($_POST['idno'])
{

$idno = mysql_query("select * from students where studid = '$_POST[idno]'");
$a=mysql_num_rows($idno);
$b=mysql_fetch_array($idno);

}
if($a<=0) {
$disable="readonly=\"$false\"";
$name= "";
?>
<tr>
<td class="ThRows" colspan="2"><span style="color:#990033""><?php echo $_POST['idno']." Not Found"; ?></span></td>
</tr>
<?php
} else {
$disable="";
$name= $b['name'];
}
?>
<tr>

<td class="ThRows">Position</td>
<?php
$cellvalue = "";
if ((!isset($_GET["add_fd1"])) && (!isset($_POST["add_fd1"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd1");
}

    $cellvalue = "<select $disable name=\"add_fd1\" ><option value=\"\"" . qscheckselected("",$itemvalue,"selected") . ">-- Select --</option>" . qsmysqlgen_listbox("  Select Distinct `position`,`position` From `position` ","add_fd1","position","position",$itemvalue) . "</select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [DEC645AD-1B31-4549-80B8-A2A18F32116B] [Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [DEC645AD-1B31-4549-80B8-A2A18F32116B] [Position]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Name</td>
<?php
$cellvalue = "";
if ((!isset($_GET["add_fd2"])) && (!isset($_POST["add_fd2"]))) {
    $itemvalue = "";
} else {
	if ($a <= 0) {	
    $itemvalue = "";
	} elseif($a > 0) {
	$itemvalue = $name;
	} else {
	$itemvalue = qsrequest("add_fd2");
	}
}

    $cellvalue = "<input $disable\" type=\"text\" name=\"add_fd2\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2] [Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [EDD6E0BA-23AD-4655-9764-3A0A670E9FE2] [Name]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Platform</td>
<?php
$cellvalue = "";
if ((!isset($_GET["add_fd3"])) && (!isset($_POST["add_fd3"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd3");
}

    $cellvalue = "<input $disable type=\"text\" name=\"add_fd3\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"255\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF] [Platform]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [A01F59CB-DA34-4C27-9BC8-ECFB4FD3DDFF] [Platform]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Picture</td>
<?php

    $cellvalue = "<input $disable type=\"file\" name=\"upload_fd4\">";
;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Picture -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A] [Picture]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Picture -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [FD2D2E1C-42D5-4FC9-8C56-13BCEAEB908A] [Picture]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>

<?php
$cellvalue = "0";
if ((!isset($_GET["add_fd5"])) && (!isset($_POST["add_fd5"]))) {
    $itemvalue = "0";
} else {
    $itemvalue = "0";
}

    $cellvalue = "<input type=\"hidden\" name=\"add_fd5\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE] [Sy]

    print " " . $cellvalue . "";
?>
</tr>
<tr>
<td class="ThRows">Academic Yr</td>
<?php
$cellvalue = "";
if ((!isset($_GET["add_fd6"])) && (!isset($_POST["add_fd6"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd6");
}

    $cellvalue = "<input $disable type=\"text\" name=\"add_fd6\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE] [Sy]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Id</td>
<?php
$cellvalue = "";
if ((!isset($_GET["add_fd7"])) && (!isset($_POST["add_fd7"]))) {
    $itemvalue = "";
} else {
    $itemvalue = qsrequest("add_fd7");
}

    $cellvalue = "<input $disable type=\"text\" name=\"add_fd7\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [2DA01D5E-A19F-42DF-85B6-3AAF63045FEE] [Sy]

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
<input type="submit" name="QS_Submit" value="Add">&nbsp;&nbsp;
<input type="reset" name="QS_Reset" value="Reset"></td>
</tr>
</Table>
<br>
</Form>
<?php
// >> START OF "after add data form" [ADDFRM001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add data form" [ADDFRM001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<?php
if ($result > 0) {mysql_free_result($result);}
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [07385BCC-B051-4DA5-A76A-6AC2805C875E] [Add Candidate]
?>
