
<?php
 

@session_start();

$_SESSION["SkipConnectMySQL"] = "";

require('qs_connection.php');
require('qs_functions.php');

$err_string="";
$quotechar = "`";
$quotedate = "'";
$sql = "";

//above connecting
$sql = mysql_query("SELECT `leve`,`username`,`password` FROM `agents` WHERE `username` = '".$_POST['Username']."'");
?>
<HTML>

<HEAD>

<link rel="icon" href="../pictures/favicon.jpg">
<Title>Agents Data</Title>

<link rel="stylesheet" type="text/css" href="candidate.css">


  
<script type="text/javascript" src="./js/yahoo-min.js" ></script>
<script type="text/javascript" src="./js/dom-min.js" ></script>
<script type="text/javascript" src="./js/event-min.js" ></script>

<script type="text/javascript">

   

</script>



	<link rel="stylesheet" type="text/css" href="./css/ContentLayout.css"></link>


<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 5
var _Leve                                       = 0;
var _Username                                 = 1;
var _Password                                    = 2;

var _Edit                                     = 3;
var _Delete                                   = 4;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Leve] = "Leve";
fieldPrompts[_Username] = "Username";
fieldPrompts[_Password] = "Password";

fieldPrompts[_Edit] = "Edit";
fieldPrompts[_Delete] = "Delete";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Leve] = "Leve";
fieldTechNames[_Username] = "Username";
fieldTechNames[_Password] = "Password";
fieldTechNames[_Edit] = "Edit";
fieldTechNames[_Delete] = "Delete";


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
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<script>

function usrEvent__Candidate_Data__onload() {
  // >> START OF "Candidate Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60]
  // << END OF "Candidate Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60]
}



function usrEvent__Candidate_Data__onunload() {
  // >> START OF "Candidate Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60]
  // << END OF "Candidate Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60]
}



function usrEvent__Candidate_Data__onresize() {
  // >> START OF "Candidate Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60]
  // << END OF "Candidate Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60]
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
 
  

   return true;                                        
}                                                      


</script>



</HEAD>

<BODY>

<SCRIPT language=JavaScript>
function cell_over(cell, classname) {
    if (document.all || document.getElementById) {
        cell.classBackup = cell.className;
        cell.className   = classname;
    }
}
function cell_out(cell)
{
    if (document.all || document.getElementById) {
        cell.className   = cell.classBackup;
    }
}
</SCRIPT>


<Center>
<center><hr />
  <span class="style1"><font size="5">
Agents Data
  </font></span>
  <hr /></center><br>



<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" 
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">

        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">

        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php 
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
$result = mysql_query($sql)
          or die("Invalid query");
// >> START OF "on open recordset" [RSOPEN001] [INLINE] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset" [RSOPEN001] [INLINE] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
   if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
   }
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
$num_rows = mysql_num_rows($result);
$page_count = ceil($num_rows/$page_size);
if ($current_page > $page_count) { $current_page = 1; }
if ($current_page < 1) { $current_page = 1; }
if ($page_count < 1) { $page_count = 1; }
if ($filter_string !=""){
  print "Found ".$num_rows. " record(s)";
  print "<br>";
}
?>


<?php
if ($qry_string != "") {
  $navqry_string = "&" . $qry_string;
} else {
  $navqry_string = "";
}
print "<table height=\"30\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">";
print "<tr align=\"center\" valign=\"middle\">";
print "<form action=\"candidate.php\" method=\"post\" name=\"QSSelectPage\">";
print "<td width=\"35\" align=\"center\"><A HREF=\"agents.php?clearsession=1" . "\"><img src=\"images/bt_qsshowall.gif\" border=\"0\" align=\"absmiddle\" title=\"Show All\"></A></td><td width=\"8\"></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"agents_search.php?" . $qry_string . "\"><img src=\"images/bt_qssearch.gif\" border=\"0\" align=\"absmiddle\" title=\"Search\"></A></td><td width=\"8\"></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"agents_add.php?" . $qry_string . "\"><img src=\"images/bt_qsadd_new.gif\" border=\"0\" align=\"absmiddle\" title=\"Add New\"></A></td><td width=\"12\" align=\"center\"><IMG src=\"images/bt_qsbetween.gif\" border=\"0\"></td>";
if ($current_page > 1) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"agents_data.php?page=" . ($current_page - 1) . "\"><img src=\"images/bt_qsback.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsback_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><select name=\"page\"  onChange=\"window.location='candidate.php?page=' + this.value; \">";
for ($i = 1; $i <= $page_count; $i++) {
    if ($i == $current_page) {
        print "<option value=\"". $i . "\" selected>" . ($i) . "</option>";
    } else {
        print "<option value=\"". $i . "\">" . ($i) . "</option>";
    }
}
print "</select></td><td width=\"8\"></td>";
if ($current_page < $page_count) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"agents_data.php?page=" . ($current_page + 1) . "\"><img src=\"images/bt_qsnext.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsnext_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><A HREF=#BOTTOM><img src=\"images/bt_qsbottom.gif\" border=\"0\" align=\"absmiddle\" title=\"Bottom\"></A></td><td width=\"8\"></td>";
print "</form>";
print "</tr>";
print "</table>";
print "<br>";
?>
<?php
// >> START OF "after top navigation toolbar" [TOPNAVBARTD001] [POST] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after top navigation toolbar" [TOPNAVBARTD001] [POST] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
?>
<?php
if ($num_rows > 0) {
// >> START OF "on record found" 
	?>
<Table  id="masterDataTable"  Border="0" Cellpadding="2" Cellspacing="1"BgColor="#D4D4D4">

<tr>
<?php
// >> START OF "before header row first cell" 
?>

<?php
$nextsortasc = qssortasc(qssession("agents_sortfield"), $fields[0], qssession("agents_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("agents_sortfield"), $fields[0], qssession("agents_sortby"),  "Sort Descending");
?>

<?php
$nextsortasc = qssortasc(qssession("agents_sortfield"), $fields[1], qssession("agents_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("agents_sortfield"), $fields[1], qssession("agents_sortby"),  "Sort Descending");
?>
<td id="Position_caption_cell" class="ThRows"  NOWRAP ><a href="agents_data.php?sortfield=<?php print urlencode(stripslashes($fields[1]));?>&sortby=ASC<?php print $navqry_string; ?>"><?php print $nextsortasc; ?></a>
&nbsp;<span id="Position_caption_div">Username</span>&nbsp;
<a href="agents_data.php?sortfield=<?php print urlencode(stripslashes($fields[1]));?>&sortby=DESC<?php print $navqry_string; ?>"><?php print $nextsortdesc; ?></a></td>
<?php
$nextsortasc = qssortasc(qssession("agents_sortfield"), $fields[2], qssession("agents_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("agents_sortfield"), $fields[2], qssession("agents_sortby"),  "Sort Descending");
?>
<td id="Name_caption_cell" class="ThRows"  NOWRAP ><a href="agents_data.php?sortfield=<?php print urlencode(stripslashes($fields[2]));?>&sortby=ASC<?php print $navqry_string; ?>"><?php print $nextsortasc; ?></a>
&nbsp;<span id="Name_caption_div">Password</span>&nbsp;
<a href="agents_data.php?sortfield=<?php print urlencode(stripslashes($fields[2]));?>&sortby=DESC<?php print $navqry_string; ?>"><?php print $nextsortdesc; ?></a></td>
<?php
$nextsortasc = qssortasc(qssession("agents_sortfield"), $fields[3], qssession("agents_sortby"),  "Sort Ascending");
$nextsortdesc = qssortdesc(qssession("agents_sortfield"), $fields[3], qssession("agents_sortby"),  "Sort Descending");
?>
<td id="Edit_caption_cell" class="ThRows"  NOWRAP><span id="Edit_caption_div">Edit</span></td>
<td id="Delete_caption_cell" class="ThRows"  NOWRAP><span id="Delete_caption_div">Delete</span></td><?php
// >> START OF "after header row last cell" [TBLDATAHDRCELL] [POST] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after header row last cell" [TBLDATAHDRCELL] [POST] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
?>

</tr>

<?php
$rowcount = 0;
$current_row = ($current_page - 1)*$page_size;
if (($num_rows > 0) && ($current_row < $num_rows)){
    mysql_data_seek($result, $current_row);
}
while (($row = mysql_fetch_array($result)) && ($rowcount < $page_size)) {
// >> START OF "on fetch data" 
// >> START OF "before table row" 
  $intColCount = 0;
// >> START OF "on row class style" [ROWCLASS001] [INLINE] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on row class style" [ROWCLASS001] [INLINE] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]

    if (($rowcount%2) == 0) {
        $css_class = "\"TrOdd\"";
    } else {
        $css_class = "\"TrRows\"";
    }
    print "<tr class=" . $css_class . " onmouseover=\"cell_over(this, 'TrHover')\"  onmouseout=\"cell_out(this)\">";
// >> START OF "before table column" [
   $intColCount++;
   $intColIndex = 0;

    $cellvalue = "" . number_format($row[0],0,".",",") . "";
// >> START OF "Id -> on write tags" 
   
   $intColCount++;
   $intColIndex = 1;

    $cellvalue = "" . $row[1] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" 
    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
   $intColCount++;
   $intColIndex = 2;

    $cellvalue = "" . $row[2] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" 
    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
   $intColCount++;
   $intColIndex = 3;

    $cellvalue = "" . $row[3] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Platform -> on write tags" 
    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
   $intColCount++;
   $intColIndex = 4;

    $cellvalue = "" . $row[4] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }

    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
  
   $intColCount++;
   $intColIndex = 6;

    $cellvalue = "" . $row[6] . "";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" 

    print "<td align=Default >";
    print $cellvalue;
    print "</td>";
   $intColCount++;
   $intColIndex = 7;

    $cellvalue = "<img src=\"" . "./images/bt_edit.gif" . "\" border=\"0\"  title=\"Edit\" onerror=\"this.onerror=null;this.src='./images/qs_nopicture.gif';\" >";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }


    print "<td align=Center >";
    print "<a href=\"" . "./agents_edit.php?" . ""."currentrow_fd0=" . urlencode($row[0]) . "" . "\" >" . $cellvalue . "</a>";
    print "</td>";
   $intColCount++;
   $intColIndex = 8;

    $cellvalue = "<img src=\"" . "./images/bt_delete.gif" . "\" border=\"0\"  title=\"Delete\" onerror=\"this.onerror=null;this.src='./images/qs_nopicture.gif';\" >";
    if ($cellvalue != "") {
        $cellvalue = str_replace(array("\n\r","\r\n","\n","\r"),"<br>",$cellvalue);
    }
    else { 
        $cellvalue = "&nbsp;";
    }
// >> START OF "Delete -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [9CED1CD2-ED96-4D01-9001-AF141BFA23A2] [Delete]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Delete -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [9CED1CD2-ED96-4D01-9001-AF141BFA23A2] [Delete]

    print "<td align=Center >";
    print "<a href=\"" . "./agents_delete.php?" . ""."currentrow_fd0=" . urlencode($row[0]) . "" . "\" >" . $cellvalue . "</a>";
    print "</td>";


    print "</tr>";
// >> START OF "after table row" [ROWTR001] [POST] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after table row" [ROWTR001] [POST] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]

  $rowcount = $rowcount + 1;
}//end while
?>

    </Table>

  <br>

<?php
}else{
// >> START OF "on no record found" [NORECFOUND001] [INLINE] [START] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on no record found" [NORECFOUND001] [INLINE] [STOP] [SRV] [6FFBBB6B-6FA9-4D56-A46D-D139F6873F60] [Candidate Data]
?>

<?php
if ($filter_string != ""){
?><Table Border="0" Cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td height="80" align="Default" bgcolor="#FFFFFF">
      <font color="#000099" size="2">
        No record matched your search criteria.
      </font>
    </td>
  </tr>
</Table><br>

<?php
}else{
 ?><Table Border="0" Cellspacing="1" bgcolor="#CCCCCC" >
  <tr>
    <td height="80" align="Default" bgcolor="#FFFFFF">
      <font color="#000099" size="2">
        No record found.
      </font>
    </td>
  </tr>
</Table><br>

<?php
}
}
if ($qry_string != "") {
  $navqry_string = "&" . $qry_string;
} else {
  $navqry_string = "";
}
print "<table height=\"30\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">";
print "<tr align=\"center\" valign=\"middle\">";
print "<form action=\"agents_data.php\" method=\"post\" name=\"QSSelectPage\">";
print "<td width=\"35\" align=\"center\"><A HREF=\"agents_data.php?clearsession=1" . "\"><img src=\"images/bt_qsshowall.gif\" border=\"0\" align=\"absmiddle\" title=\"Show All\"></A></td><td width=\"8\"></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"agents_search.php?" . $qry_string . "\"><img src=\"images/bt_qssearch.gif\" border=\"0\" align=\"absmiddle\" title=\"Search\"></A></td><td width=\"8\"></td>";
print "<td width=\"35\" align=\"center\"><A HREF=\"agents_add.php?" . $qry_string . "\"><img src=\"images/bt_qsadd_new.gif\" border=\"0\" align=\"absmiddle\" title=\"Add New\"></A></td><td width=\"12\" align=\"center\"><IMG src=\"images/bt_qsbetween.gif\" border=\"0\"></td>";
if ($current_page > 1) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"agents_data.php?page=" . ($current_page - 1) . "\"><img src=\"images/bt_qsback.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsback_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Previous\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><select name=\"page\"  onChange=\"window.location='agents_data.php?page=' + this.value; \">";
for ($i = 1; $i <= $page_count; $i++) {
    if ($i == $current_page) {
        print "<option value=\"". $i . "\" selected>" . ($i) . "</option>";
    } else {
        print "<option value=\"". $i . "\">" . ($i) . "</option>";
    }
}
print "</select></td><td width=\"8\"></td>";
if ($current_page < $page_count) {
    print "<td width=\"35\" align=\"center\"><A HREF=\"agents_data.php?page=" . ($current_page + 1) . "\"><img src=\"images/bt_qsnext.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></A></td><td width=\"8\"></td>";
} else {
    print "<td width=\"35\" align=\"center\"><img src=\"images/bt_qsnext_inact.gif\" border=\"0\" align=\"absmiddle\" title=\"Next\"></td><td width=\"8\"></td>";
}
print "<td width=\"35\" align=\"center\"><A HREF=#TOP><img src=\"images/bt_qstop.gif\" border=\"0\" align=\"absmiddle\" title=\"Top\"></A></td><td width=\"8\"></td>";
print "</form>";
print "</tr>";
print "</table>";
print "<br>";
?>
<?php
// >> START OF "after bottom navigation toolbar" 
?>
<?php
if ($result > 0) {mysql_free_result($result);}
if ($link > 0) {mysql_close($link);}
?>

        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">

        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">

        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">

        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">

        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
 
<button onClick="window.location.href='home.php'">Home</button>
</Center>


</BODY>
</HTML>



