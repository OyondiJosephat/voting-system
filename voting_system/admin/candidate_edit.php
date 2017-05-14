<?php
// >> START OF "on begin of page" [BOF001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on begin of page" [BOF001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
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
#  Page Name.................: Update Candidate
#  Page Type.................: 4 - Edit Page
#  Page GUID.................: 67F0293D-FD93-4734-9A12-2776E8B2322A
#  Page SerialID.............: 435
#  Page File Name............: candidate_edit
#   
#  Generated on..............: Monday, October 27, 2008
#  Generation Timestamp......: 2008-27-10 21:46:47
#  Language..................: PHP
#   
#  6 Page Items:
#   
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  | Ref | Item Name / Caption                      | Type| Item Value Mapping / Reference           | Technical Implementation Name            |
#  +-----+------------------------------------------+-----+------------------------------------------+------------------------------------------+
#  |   0 | Id                                       | 5   | [id]                                     | Id                                       |
#  |   1 | Position                                 | 4   | [position]                               | Position                                 |
#  |   2 | Name                                     | 2   | [name]                                   | Name                                     |
#  |   3 | Platform                                 | 2   | [platform]                               | Platform                                 |
#  |   4 | Picture                                  | 8   | [picture]                                | Picture                                  |
#  |   5 | Sy                                       | 2   | [sy]                                     | Sy                                       |
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

// >> START OF "before standard include" [STDINCLD001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before standard include" [STDINCLD001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
require('qs_connection.php');
require('qs_functions.php');
// >> START OF "after standard include" [STDINCLD001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after standard include" [STDINCLD001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
$row = "";
// >> START OF "before session init" [SESS001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before session init" [SESS001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
@session_start();
// >> START OF "after session init" [SESS001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after session init" [SESS001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
// >> START OF "before local declaration" [LCLVARDECL001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before local declaration" [LCLVARDECL001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
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
$formatdate = array();
$formatdate[0] = "";
$formatdate[1] = "";
$formatdate[2] = "";
$formatdate[3] = "";
$formatdate[4] = "";
$formatdate[6] = "";
$seperatedate = array();
$seperatedate[0] = " ";
$seperatedate[1] = " ";
$seperatedate[2] = " ";
$seperatedate[3] = " ";
$seperatedate[4] = " ";
$seperatedate[6] = " ";
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

$isEditables = array();
$isEditables[0] = 0;
$isEditables[1] = 1;
$isEditables[2] = 1;
$isEditables[3] = 1;
$isEditables[4] = 2;
$isEditables[6] = 1;

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
$req_Id              = "edit_fd0";
$req_Position        = "edit_fd1";
$req_Name            = "edit_fd2";
$req_Platform        = "edit_fd3";
$req_Picture         = "edit_fd4";
$req_Sy              = "edit_fd6";

//Assign Recordset Field Index
$rs_idx_id           = 0;
$rs_idx_position     = 1;
$rs_idx_name         = 2;
$rs_idx_platform     = 3;
$rs_idx_picture      = 4;
$rs_idx_votecount    = 5;
$rs_idx_sy           = 6;

// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}
// >> START OF "on open connection" [OPENCONN001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open connection" [OPENCONN001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
// >> START OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on create recordset object" [CRTRECSETOBJ001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
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
    if (qsvalidRequest("search_fd" .$i)) {
        if ($qry_string == "") {
            $qry_string = "search_fd" . $i . "=" . qsrequest("search_fd" . $i);
        } else {
            $qry_string .= "&search_fd" .$i . "=" . qsrequest("search_fd" . $i);
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"search_fd" . $i . "\" value=\"" . qsrequest("search_fd" . $i) . "\">\n";
        if ($qry_string == "") {
            $qry_string = "multisearch_fd" . $i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        } else {
            $qry_string .= "&multisearch_fd" .$i . "=" . urlencode(stripslashes(qsrequest("multisearch_fd" . $i)));
        }
        $hidden_tag .= "<input type=\"hidden\" name=\"multisearch_fd" .$i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("multisearch_fd" . $i))) . "\">\n";
    }
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
    if ($meta) {
        if (qsrequest("currentrow_fd" .$i) != "") {
            if ($currentrow_sql == "") {
                $currentrow_sql  = $fields[$i] . " = " . $quotedata . ereg_replace("'","''",stripslashes(qsrequest("currentrow_fd" . $i))) . $quotedata;
            } else {
                $currentrow_sql .= " and " .$fields[$i] . " = " . $quotedata . ereg_replace("'","''",stripslashes(qsrequest("currentrow_fd" . $i))) . $quotedata;
            }
            $hiddenrow_tag .= "<input type=\"hidden\" name=\"currentrow_fd" . $i . "\" value=\"" . qsreplace_html_quote(stripslashes(qsrequest("currentrow_fd" . $i))) . "\">\n";
        }
      if($isEditables[$i])
      {
        if ($type_field == "type_datetime") {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
// >> START OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add date/time form field to sql (php)" [ITEMBEFADDTOSQLDTM] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]

                $value_sql .= "," . $quotechar . $field_name . $quotechar . " = " . $quotedate . qsconvertdate2ansi($idata,$formatdate[$i],$seperatedate[$i]) . $quotedate;
            }
            else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } elseif ($type_field == "type_integer") {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
                $idata = QSConvert2EngNumber($idata); 
// >> START OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add integer form field to sql (php)" [ITEMBEFADDTOSQLINT] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]

                if (is_numeric($idata)) {
                        $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = " . $idata;
                } else {
                    $err_string .= "<strong>Error:</strong>while updating<strong>" . $field_name . "</strong>.<br>";
                    $err_string .= "Description: Type mismatch.<br>";
                }
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } elseif ($type_field == "type_string") {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
// >> START OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add string form field to sql (php)" [ITEMBEFADDTOSQLSTRING] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]

                $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = '" . ereg_replace("'","''",stripslashes($idata)) . "'";
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        } else {
            if (qsvalidRequest("edit_fd" . $i)) {
                $idata = qsrequest("edit_fd" . $i);
// >> START OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before add other form field to sql (php)" [ITEMBEFADDTOSQLOTHER] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]

                $value_sql  .= "," . $quotechar . $field_name . $quotechar . " = '" . ereg_replace("'","''",stripslashes($idata)) . "'";
            }
			       else if($isEditables[$i] != 2) {
		             $value_sql .= "," . $quotechar . $field_name . $quotechar . " = null"; 
	           }
        }
// >> START OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after add form field to sql (php)" [ITEMAFTADDTOSQL] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]

      }//if ($isEditables[$i])
    }//if ($meta)
$i++;
}
if (isset($_POST["act"])) {
   $ProcessForm  = "Y"; 
// >> START OF "before server form processing" [FORMPROCESS001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before server form processing" [FORMPROCESS001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
   if ($ProcessForm  == "Y") { 
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
  if ($currentrow_sql != "") {
    $sql .= " where ".$currentrow_sql ;
  }
    $result =  mysql_query($sql) or die("Invalid query");
    $row = mysql_fetch_array($result);
$uploadDir = "pictures/";
$optUpdate = 1;
$maxFileSize = 1024000;
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
// >> START OF "before upload file" [UPLOAD001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before upload file" [UPLOAD001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
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
// >> START OF "on upload file error" [UPLOADERR001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on upload file error" [UPLOADERR001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
		     $err_string = 	"Cannot upload file! There is problem occured when upload."	;
	   }
    } else {
        $err_string = "<font color= red>Your file size is bigger than the maximum size(".$maxFileSize." byte) that we allow to upload</font>";
    }
}
}
// >> START OF "after upload file" [UPLOAD001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after upload file" [UPLOAD001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
if (($err_string)=="") {
    if (($value_sql)!="") {
        if (substr($value_sql, 0, 1) == ",") {
           $value_sql = substr($value_sql, 1);
        }
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
        $sql  = "";
        $sql  = "update " . $quotechar . mysql_field_table($result,0) . $quotechar;
        $sql .= " set " . $value_sql;
        $sql .= " where ";
        $sql .= $currentrow_sql;
// >> START OF "after prepare query" [PREPAREQRY001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after prepare query" [PREPAREQRY001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
      if ($result > 0) {mysql_free_result($result);}
      if (!$result = @mysql_query($sql)){
        $err_string .= "<strong>Error:</strong>while updating<br>" . mysql_error();
// >> START OF "on update data error" [UPDATEDATAERR001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on update data error" [UPDATEDATAERR001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
      } else {
// >> START OF "on update data success" [UPDATEDATASUCCESS001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on update data success" [UPDATEDATASUCCESS001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
      }
    }
#----get submit url page----
    $submiturl = "./candidate.php?";
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
  } //end if ProcessForm 
// >> START OF "after server form processing" [FORMPROCESS001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after server form processing" [FORMPROCESS001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
}
else
{
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
  if ($currentrow_sql != "") {
    $sql .= " where ".$currentrow_sql ;
  }
    $result =  mysql_query($sql) or die("Invalid query");
    $row = mysql_fetch_array($result);
}
?>
<HTML>
<?php
// >> START OF "before page html" [HTML001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page html" [HTML001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<HEAD>
<?php
// >> START OF "before html header" [HTMLHEADER001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before html header" [HTMLHEADER001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<Title>Update Candidate</Title>
<?php
// >> START OF "before include css" [INCLDCSS001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include css" [INCLDCSS001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<link rel="stylesheet" type="text/css" href="candidate_edit.css">
<?php
// >> START OF "after include css" [INCLDCSS001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include css" [INCLDCSS001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<?php
// >> START OF "before include js" [INCLDJS001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before include js" [INCLDJS001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
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
var qsPageItemsCount = 6
var _Id                                       = 0;
var _Position                                 = 1;
var _Name                                     = 2;
var _Platform                                 = 3;
var _Picture                                  = 4;
var _Sy                                       = 5;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Id] = "Id";
fieldPrompts[_Position] = "Position";
fieldPrompts[_Name] = "Name";
fieldPrompts[_Platform] = "Platform";
fieldPrompts[_Picture] = "Picture";
fieldPrompts[_Sy] = "Sy";

// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Id] = "Id";
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
  document.getElementsByName("edit_fd1")[0].id = fieldTechNames[_Position];
  document.getElementsByName("edit_fd2")[0].id = fieldTechNames[_Name];
  document.getElementsByName("edit_fd3")[0].id = fieldTechNames[_Platform];
  document.getElementsByName("upload_fd4")[0].id = fieldTechNames[_Picture];
  document.getElementsByName("edit_fd6")[0].id = fieldTechNames[_Sy];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_edit_form")[0];   //Define Form Object by Name.

  pgitm_Position                           = document.getElementsByName("edit_fd1")[0];
  pgitm_Name                               = document.getElementsByName("edit_fd2")[0];
  pgitm_Platform                           = document.getElementsByName("edit_fd3")[0];
  pgitm_Picture                            = document.getElementsByName("upload_fd4")[0];
  pgitm_Sy                                 = document.getElementsByName("edit_fd6")[0];
}

</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Update Candidate -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]-->
<!-- << END OF "Update Candidate -> Client Includes" [clientincludes] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]-->




<script>

function usrEvent__Update_Candidate__onload() {
  // >> START OF "Update Candidate -> On Load" [onload] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
  // << END OF "Update Candidate -> On Load" [onload] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
}



function usrEvent__Update_Candidate__onunload() {
  // >> START OF "Update Candidate -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
  // << END OF "Update Candidate -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
}



function usrEvent__Update_Candidate__onresize() {
  // >> START OF "Update Candidate -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
  // << END OF "Update Candidate -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
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
  // >> START OF "Position -> On Focus" [onfocus] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Focus" [onfocus] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onblur(HTMLElement) {
  // >> START OF "Position -> On Blur (loss of focus)" [onblur] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Blur (loss of focus)" [onblur] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onclick(HTMLElement) {
  // >> START OF "Position -> On Click" [onclick] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Click" [onclick] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__ondblclick(HTMLElement) {
  // >> START OF "Position -> On Double Click" [ondblclick] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Double Click" [ondblclick] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onkeydown(HTMLElement) {
  // >> START OF "Position -> On Key Down" [onkeydown] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Key Down" [onkeydown] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onkeypress(HTMLElement) {
  // >> START OF "Position -> On Key Press" [onkeypress] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Key Press" [onkeypress] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onkeyup(HTMLElement) {
  // >> START OF "Position -> On Key Up" [onkeyup] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Key Up" [onkeyup] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onchange(HTMLElement) {
  // >> START OF "Position -> On Change" [onchange] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Change" [onchange] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onmousedown(HTMLElement) {
  // >> START OF "Position -> On Mouse Down" [onmousedown] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Mouse Down" [onmousedown] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onmousemove(HTMLElement) {
  // >> START OF "Position -> On Mouse Move" [onmousemove] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Mouse Move" [onmousemove] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onmouseout(HTMLElement) {
  // >> START OF "Position -> On Mouse Out" [onmouseout] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Mouse Out" [onmouseout] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onmouseover(HTMLElement) {
  // >> START OF "Position -> On Mouse Over" [onmouseover] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Mouse Over" [onmouseover] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}
function usrEvent__Position__onmouseup(HTMLElement) {
  // >> START OF "Position -> On Mouse Up" [onmouseup] [Position] [START] [JS] [536332D7-F336-4526-A0E9-768DED965399]
  // << END OF "Position -> On Mouse Up" [onmouseup] [Position] [STOP] [JS] [536332D7-F336-4526-A0E9-768DED965399]
}

function usrEvent__Name__onfocus(HTMLElement) {
  // >> START OF "Name -> On Focus" [onfocus] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Focus" [onfocus] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onblur(HTMLElement) {
  // >> START OF "Name -> On Blur (loss of focus)" [onblur] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Blur (loss of focus)" [onblur] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onclick(HTMLElement) {
  // >> START OF "Name -> On Click" [onclick] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Click" [onclick] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__ondblclick(HTMLElement) {
  // >> START OF "Name -> On Double Click" [ondblclick] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Double Click" [ondblclick] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onkeydown(HTMLElement) {
  // >> START OF "Name -> On Key Down" [onkeydown] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Key Down" [onkeydown] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onkeypress(HTMLElement) {
  // >> START OF "Name -> On Key Press" [onkeypress] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Key Press" [onkeypress] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onkeyup(HTMLElement) {
  // >> START OF "Name -> On Key Up" [onkeyup] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Key Up" [onkeyup] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onchange(HTMLElement) {
  // >> START OF "Name -> On Change" [onchange] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Change" [onchange] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onmousedown(HTMLElement) {
  // >> START OF "Name -> On Mouse Down" [onmousedown] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Mouse Down" [onmousedown] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onmousemove(HTMLElement) {
  // >> START OF "Name -> On Mouse Move" [onmousemove] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Mouse Move" [onmousemove] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onmouseout(HTMLElement) {
  // >> START OF "Name -> On Mouse Out" [onmouseout] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Mouse Out" [onmouseout] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onmouseover(HTMLElement) {
  // >> START OF "Name -> On Mouse Over" [onmouseover] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Mouse Over" [onmouseover] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onmouseup(HTMLElement) {
  // >> START OF "Name -> On Mouse Up" [onmouseup] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Mouse Up" [onmouseup] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}
function usrEvent__Name__onselect(HTMLElement) {
  // >> START OF "Name -> On Select" [onselect] [Name] [START] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
  // << END OF "Name -> On Select" [onselect] [Name] [STOP] [JS] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9]
}

function usrEvent__Platform__onfocus(HTMLElement) {
  // >> START OF "Platform -> On Focus" [onfocus] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Focus" [onfocus] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onblur(HTMLElement) {
  // >> START OF "Platform -> On Blur (loss of focus)" [onblur] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Blur (loss of focus)" [onblur] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onclick(HTMLElement) {
  // >> START OF "Platform -> On Click" [onclick] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Click" [onclick] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__ondblclick(HTMLElement) {
  // >> START OF "Platform -> On Double Click" [ondblclick] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Double Click" [ondblclick] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onkeydown(HTMLElement) {
  // >> START OF "Platform -> On Key Down" [onkeydown] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Key Down" [onkeydown] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onkeypress(HTMLElement) {
  // >> START OF "Platform -> On Key Press" [onkeypress] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Key Press" [onkeypress] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onkeyup(HTMLElement) {
  // >> START OF "Platform -> On Key Up" [onkeyup] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Key Up" [onkeyup] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onchange(HTMLElement) {
  // >> START OF "Platform -> On Change" [onchange] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Change" [onchange] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onmousedown(HTMLElement) {
  // >> START OF "Platform -> On Mouse Down" [onmousedown] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Mouse Down" [onmousedown] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onmousemove(HTMLElement) {
  // >> START OF "Platform -> On Mouse Move" [onmousemove] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Mouse Move" [onmousemove] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onmouseout(HTMLElement) {
  // >> START OF "Platform -> On Mouse Out" [onmouseout] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Mouse Out" [onmouseout] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onmouseover(HTMLElement) {
  // >> START OF "Platform -> On Mouse Over" [onmouseover] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Mouse Over" [onmouseover] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onmouseup(HTMLElement) {
  // >> START OF "Platform -> On Mouse Up" [onmouseup] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Mouse Up" [onmouseup] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}
function usrEvent__Platform__onselect(HTMLElement) {
  // >> START OF "Platform -> On Select" [onselect] [Platform] [START] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
  // << END OF "Platform -> On Select" [onselect] [Platform] [STOP] [JS] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4]
}

function usrEvent__Picture__onfocus(HTMLElement) {
  // >> START OF "Picture -> On Focus" [onfocus] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Focus" [onfocus] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onblur(HTMLElement) {
  // >> START OF "Picture -> On Blur (loss of focus)" [onblur] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Blur (loss of focus)" [onblur] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onclick(HTMLElement) {
  // >> START OF "Picture -> On Click" [onclick] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Click" [onclick] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__ondblclick(HTMLElement) {
  // >> START OF "Picture -> On Double Click" [ondblclick] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Double Click" [ondblclick] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onkeydown(HTMLElement) {
  // >> START OF "Picture -> On Key Down" [onkeydown] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Key Down" [onkeydown] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onkeypress(HTMLElement) {
  // >> START OF "Picture -> On Key Press" [onkeypress] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Key Press" [onkeypress] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onkeyup(HTMLElement) {
  // >> START OF "Picture -> On Key Up" [onkeyup] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Key Up" [onkeyup] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onchange(HTMLElement) {
  // >> START OF "Picture -> On Change" [onchange] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Change" [onchange] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onmousedown(HTMLElement) {
  // >> START OF "Picture -> On Mouse Down" [onmousedown] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Mouse Down" [onmousedown] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onmousemove(HTMLElement) {
  // >> START OF "Picture -> On Mouse Move" [onmousemove] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Mouse Move" [onmousemove] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onmouseout(HTMLElement) {
  // >> START OF "Picture -> On Mouse Out" [onmouseout] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Mouse Out" [onmouseout] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onmouseover(HTMLElement) {
  // >> START OF "Picture -> On Mouse Over" [onmouseover] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Mouse Over" [onmouseover] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}
function usrEvent__Picture__onmouseup(HTMLElement) {
  // >> START OF "Picture -> On Mouse Up" [onmouseup] [Picture] [START] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
  // << END OF "Picture -> On Mouse Up" [onmouseup] [Picture] [STOP] [JS] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3]
}

function usrEvent__Sy__onfocus(HTMLElement) {
  // >> START OF "Sy -> On Focus" [onfocus] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Focus" [onfocus] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onblur(HTMLElement) {
  // >> START OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Blur (loss of focus)" [onblur] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onclick(HTMLElement) {
  // >> START OF "Sy -> On Click" [onclick] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Click" [onclick] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__ondblclick(HTMLElement) {
  // >> START OF "Sy -> On Double Click" [ondblclick] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Double Click" [ondblclick] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onkeydown(HTMLElement) {
  // >> START OF "Sy -> On Key Down" [onkeydown] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Key Down" [onkeydown] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onkeypress(HTMLElement) {
  // >> START OF "Sy -> On Key Press" [onkeypress] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Key Press" [onkeypress] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onkeyup(HTMLElement) {
  // >> START OF "Sy -> On Key Up" [onkeyup] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Key Up" [onkeyup] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onchange(HTMLElement) {
  // >> START OF "Sy -> On Change" [onchange] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Change" [onchange] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onmousedown(HTMLElement) {
  // >> START OF "Sy -> On Mouse Down" [onmousedown] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Mouse Down" [onmousedown] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onmousemove(HTMLElement) {
  // >> START OF "Sy -> On Mouse Move" [onmousemove] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Mouse Move" [onmousemove] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onmouseout(HTMLElement) {
  // >> START OF "Sy -> On Mouse Out" [onmouseout] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Mouse Out" [onmouseout] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onmouseover(HTMLElement) {
  // >> START OF "Sy -> On Mouse Over" [onmouseover] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Mouse Over" [onmouseover] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onmouseup(HTMLElement) {
  // >> START OF "Sy -> On Mouse Up" [onmouseup] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Mouse Up" [onmouseup] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}
function usrEvent__Sy__onselect(HTMLElement) {
  // >> START OF "Sy -> On Select" [onselect] [Sy] [START] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
  // << END OF "Sy -> On Select" [onselect] [Sy] [STOP] [JS] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F]
}


function usrEvent__Update_Candidate__onsubmit(frm) {
  // >> START OF "Update Candidate -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
  // << END OF "Update Candidate -> On Submit" [onsubmit] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
}



function usrEvent__Update_Candidate__onreset() {
  // >> START OF "Update Candidate -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
  // << END OF "Update Candidate -> On Reset" [onreset] [PAGEEVENT] [START] [JS] [67F0293D-FD93-4734-9A12-2776E8B2322A]
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
    if (!RequiredField(frm.edit_fd1.value)) {
        nIndex++;
        szAlert += "- " +"'Position' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd2.value)) {
        nIndex++;
        szAlert += "- " +"'Name' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd3.value)) {
        nIndex++;
        szAlert += "- " +"'Platform' cannot be blank\n";
    }
    if (!RequiredField(frm.edit_fd6.value)) {
        nIndex++;
        szAlert += "- " +"'Sy' cannot be blank\n";
    }
    if(nIndex > 0) {
       	alert(szAlert) ;
      	return false ;
    }
    return true ;
}
</script>
<script src="validate.js"></script>

<?php
// >> START OF "after include js" [INCLDJS001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after include js" [INCLDJS001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<meta name="generator" content="dbQwikSite Ecommerce"><meta name="dbQwikSitePE" content="QSFREEPE">
<?php
// >> START OF "on page metatag" [META001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on page metatag" [META001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
</HEAD>
<?php
// >> START OF "after html header" [HTMLHEADER001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after html header" [HTMLHEADER001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<BODY>
<?php
// >> START OF "before page body" [BODY001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page body" [BODY001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<?php
// >> START OF "before page header" [HEADER001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page header" [HEADER001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<Center>
<center><hr /><font size="5">
Update Candidate
</font><hr /></center><br>

<?php
// >> START OF "after page header" [HEADER001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page header" [HEADER001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<A NAME=top></A>

<table id="QS_Content_Layout_1_Table">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv">
<?php
// >> START OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north west" [CONTENTLAYOUT_1_NW] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv">
<?php
// >> START OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north" [CONTENTLAYOUT_1_N] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv">
<?php
// >> START OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - north east" [CONTENTLAYOUT_1_NE] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">
<?php
// >> START OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (before contents)" [CONTENTLAYOUT_1_C] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
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


<Form name="qs_edit_form" method="post" action="./candidate_edit.php"  enctype="multipart/form-data" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before update form" [UPDATEFRM001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before update form" [UPDATEFRM001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<?php
print $hidden_tag;
print $hiddenrow_tag;
?>
<?php
// >> START OF "before data table" [DATATABLE001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before data table" [DATATABLE001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<?php
$css_class = "\"TrOdd\"";
?>
<tr>
<td colspan="2" class="ThRows">Update Candidate</td>
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
$cellvalue = "";
if ((!isset($_GET["edit_fd0"])) && (!isset($_POST["edit_fd0"]))) {
    $itemvalue = $row[0];
} else {
    $itemvalue = qsrequest("edit_fd0");
}

    $cellvalue =  $itemvalue;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Id -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [4BD246E0-1377-4FB6-8A5D-79E19A4FBE59] [Id]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Id -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [4BD246E0-1377-4FB6-8A5D-79E19A4FBE59] [Id]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Position</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd1"])) && (!isset($_POST["edit_fd1"]))) {
    $itemvalue = $row[1];
} else {
    $itemvalue = qsrequest("edit_fd1");
}

    $cellvalue = "<select name=\"edit_fd1\" >" . qsmysqlgen_listbox("  Select Distinct `position`,`position` From `position` ","edit_fd1","position","position",$itemvalue) . "</select>";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [536332D7-F336-4526-A0E9-768DED965399] [Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [536332D7-F336-4526-A0E9-768DED965399] [Position]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Name</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd2"])) && (!isset($_POST["edit_fd2"]))) {
    $itemvalue = $row[2];
} else {
    $itemvalue = qsrequest("edit_fd2");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd2\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9] [Name]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Name -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [A1B86578-CAE0-46B4-AF41-0F0AF463E1F9] [Name]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Platform</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd3"])) && (!isset($_POST["edit_fd3"]))) {
    $itemvalue = $row[3];
} else {
    $itemvalue = qsrequest("edit_fd3");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd3\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"255\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4] [Platform]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Platform -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [EF446775-E06E-4F53-BE0D-648BBFEA4EB4] [Platform]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Picture</td>
<?php
$cellvalue = "";
if ((!isset($_GET["upload_fd4"])) && (!isset($_POST["upload_fd4"]))) {
    $itemvalue = $row[4];
} else {
    $itemvalue = qsrequest("upload_fd4");
}

    $cellvalue = "<input type=\"file\" name=\"upload_fd4\">";
$cellvalue .= "<br>( ".qsreplace_html_quote(stripslashes($itemvalue))." )";;
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Picture -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3] [Picture]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Picture -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [7A78F14A-EED4-4F7F-9F8B-163196E1E5C3] [Picture]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Sy</td>
<?php
$cellvalue = "";
if ((!isset($_GET["edit_fd6"])) && (!isset($_POST["edit_fd6"]))) {
    $itemvalue = $row[6];
} else {
    $itemvalue = qsrequest("edit_fd6");
}

    $cellvalue = "<input type=\"text\" name=\"edit_fd6\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"15\" >";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F] [Sy]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Sy -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [FAE5AFA5-24D2-4ACF-9607-E35E588D307F] [Sy]

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
<input type="submit" name="QS_Submit" value="Update">&nbsp;&nbsp;
<input type="reset" name="QS_Reset" value="Reset">
</td>
</tr>
</Table><br>
<?php
// >> START OF "after data table" [DATATABLE001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after data table" [DATATABLE001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<?php
// >> START OF "after update form" [UPDATEFRM001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after update form" [UPDATEFRM001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
</Form>
<?php
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv">
<?php
// >> START OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - east" [CONTENTLAYOUT_1_E] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv">
<?php
// >> START OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south west" [CONTENTLAYOUT_1_SW] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv">
<?php
// >> START OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south" [CONTENTLAYOUT_1_S] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv">
<?php
// >> START OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - south east" [CONTENTLAYOUT_1_SE] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
        </div>
    </td>
  </tr>
</table>

<A NAME=bottom></A>
<?php
// >> START OF "before page footer" [FOOTER001] [PRE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before page footer" [FOOTER001] [PRE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
</Center>

<?php
// >> START OF "after page footer" [FOOTER001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page footer" [FOOTER001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
<?php
// >> START OF "after page body" [BODY001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page body" [BODY001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
</BODY>
<?php
// >> START OF "after page html" [HTML001] [POST] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after page html" [HTML001] [POST] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
</HTML>
<?php
// >> START OF "on end of page" [EOF001] [INLINE] [START] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on end of page" [EOF001] [INLINE] [STOP] [SRV] [67F0293D-FD93-4734-9A12-2776E8B2322A] [Update Candidate]
?>
