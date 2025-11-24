<?php

// ==============================
// Purchase Order Status - PO
// ==============================
$po_status_ = [
    'pending'            => 'Pending',
    'approved'           => 'Approved',
    'partially_received' => 'Partially Received',
    'all_received'       => 'All Received',
    'rejected'           => 'Rejected',
    'canceled'           => 'Canceled'
];

// ==============================
// Payment Request Status - PR
// ==============================

$pr_status = [
    'Pending',
    'Checked',
    'Emailed',
    'Approved',
    
    'Rejected',
    'Paid',
    'Cancelled'
];


$id_array_ = [];

if(isset($_GET['id'])){
	
	$id_array_[] = $_GET['id'];
}


// ==============================
// Pending Invoice to Make -> PR
// ==============================
$pending_invoice_ = [];
$pending_invoice_count = 0;

$sql_pending_invoice = "SELECT `bm_vinvoice`.`vid`, `bm_prequest_invoice`.`invoice_id`
FROM `bm_vinvoice`
	LEFT JOIN `bm_prequest_invoice` ON `bm_vinvoice`.`vid`= `bm_prequest_invoice`.`invoice_id` WHERE `bm_prequest_invoice`.`invoice_id` is null";
	
$result = mysqli_query($conn, $sql_pending_invoice);	


while ($row = mysqli_fetch_assoc($result)) {
	$pending_invoice_[] = $row['vid'];
	
	$pending_invoice_count +=1;
	
}



// ==============================
// Recement Invoice
// ==============================
$recent_invoice_ = [];
if($page == 'newinvoice' OR $page == 'invoiceid' ){
	
$sql_recent_invoice = "SELECT  vid FROM `bm_vinvoice` ORDER BY vid DESC LIMIT 10";
$result = mysqli_query($conn, $sql_recent_invoice);
while ($row = mysqli_fetch_assoc($result)) {
	$recent_invoice_[] = $row['vid'];
}
}

// ==============================
// Recement Payment Reqyests
// ==============================
$pr_id_recent_ = [];
if($page == 'newrequest' OR $page == 'requestid' ){	
$sql_pr_resent = "SELECT pr_id FROM `bm_prequest` ORDER BY `pr_id` DESC LIMIT 10";
$result = mysqli_query($conn, $sql_pr_resent);

while ($row = mysqli_fetch_assoc($result)) {
    $pr_id_recent_[] = $row['pr_id'];

}
}


// ==============================
// Payment Reqyests -> ID  ->> INVOICE
// ==============================
$pr_invoice_id_ = [];
if($page == 'requestid' AND  isset($_GET['id'])){
 $sql_pr_invoice_id = "SELECT invoice_id  FROM `bm_prequest_invoice` WHERE `pr_id` = $id";
///`id`, `pr_id`, `invoice_id`, `entry_by`, `entry_at`

$result = mysqli_query($conn,  $sql_pr_invoice_id );

while ($row = mysqli_fetch_assoc($result)) {
    $pr_invoice_id_[] = $row['invoice_id'];

}


} // End If


if($page == 'requestid'){
	
$sql_pr_invoice = "SELECT * FROM `bm_prequest_invoice` WHERE `pr_id` = $id ";
	
}












$vid_invoice_list_ = [];

if($page == 'invoicelist'){
	
 	$sql_vinvoice = "SELECT * FROM bm_vinvoice WHERE vi_year = $year"; /// by year
	
	
	$result = mysqli_query($conn, $sql_vinvoice);

while ($row = mysqli_fetch_assoc($result)) {
    $vid_invoice_list_[] = $row['vid'];
	
}
	
	
	$sql_invoice_pr = "SELECT pi.id, pi.pr_id, pi.invoice_id, v.vi_year, v.vid, p.pr_year, p.pr_ref 
								FROM bm_prequest_invoice AS pi JOIN bm_vinvoice AS v ON pi.invoice_id = v.vid 
								JOIN bm_prequest AS p ON pi.pr_id = p.pr_id WHERE v.vi_year = $year ";
								
	$result = mysqli_query($conn, $sql_invoice_pr);
	
	while ($row = mysqli_fetch_assoc($result)) {
	

			$pr_invoice_no = $row['invoice_id'];
		
		$sql_invoice_pr_id[$pr_invoice_no]['year'] = $row['pr_year'];
		$sql_invoice_pr_id[$pr_invoice_no]['ref'] = $row['pr_ref'];
		$sql_invoice_pr_id[$pr_invoice_no]['id'] = $row['pr_id'];
		
	
	}
	
}  /// END -> if($page == 'invoicelist'){





$vids_ = [];
// merge both arrays
$vids_ = array_merge($recent_invoice_, $pending_invoice_, $pr_invoice_id_, $id_array_, $vid_invoice_list_);
// remove duplicates
$vids_ = array_unique($vids_);
// convert to comma-separated string
$vidList_implode = implode(',', $vids_);









if(!empty($sql_pr_invoice)){
	
$result = mysqli_query($conn, $sql_pr_invoice);
$pr_invoice_ = [];
while ($row = mysqli_fetch_assoc($result)) {
							
$pr_invoice_id = $row['invoice_id'];
	
	$pr_invoice_id_[] = $pr_invoice_id;
	
	 	$pr_id = $row['pr_id'];	
			 									
		$pr_invoice_[$pr_id][$pr_invoice_id] = [
			'id'      => $row['id'],
			'entry_by'      => $row['entry_by'],
			'entry_at'      => $row['entry_at']
		];				
	

} // End While

}








if (!empty($vidList_implode) AND $page != 'invoicelist'  ) {
	
 $sql_vinvoice = "SELECT * FROM bm_vinvoice WHERE vid IN ($vidList_implode )";
	
}


		
if(!empty($sql_vinvoice)){
// Vendor Invoices ///////////////////////////////////////////////////////////////////////////////
///$sql_vinvoice = "SELECT * FROM `bm_vinvoice` ORDER BY vid DESC LIMIT 13";
$result = mysqli_query($conn, $sql_vinvoice);
$vinvoice_ = [];
$vid_ = [];

while ($row = mysqli_fetch_assoc($result)) {
    $vid = $row['vid'];
    $vid_[] = $vid;
	
	

    $vinvoice_[$vid] = [
        'vid'          => $row['vid'],
        'vi_no'        => $row['vi_no'],
        'vi_year'      => $row['vi_year'],
        'vi_date'      => $row['vi_date'],
        'vi_ref'       => $row['vi_ref'],
        'vi_vendor_id' => $row['vi_vendor_id'],
        'vi_gst'       => $row['vi_gst'],
        'vi_total'     => $row['vi_total'],
        'vi_details'   => $row['vi_details'],
        'vi_entry_by'  => $row['vi_entry_by'],
        'vi_costcentre'=> $row['vi_costcentre'],
        'vi_location'  => $row['vi_location'],
        'created_at'   => $row['created_at'],
        'updated_at'   => $row['updated_at'],
    ];
		
}

}  // END IF








///////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////


// Invoice Payments
if(!empty($vidList_implode)){
	
$sql_invoice_payment = "SELECT * FROM bm_vinvoice_payment WHERE invoice_id IN ($vidList_implode )";

$result = mysqli_query($conn, $sql_invoice_payment);

$payment_invoice_ = [];
$pvid_ = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pvid = $row['invoice_id'];
    $pvid_[] = $pvid;

    $payment_invoice_[$pvid] = [
        'payer_name'     => $row['payer_name'],
        'payment_method' => $row['payment_method'],
        'paid_amount'    => $row['paid_amount'], // fixed typo: was 'paid_amounte'
        'paid_date'      => $row['paid_date'],
        'payment_by'     => $row['payment_by'],
        'remarks'        => $row['remarks'],
    ];
}
}

// Invoice Purchase Orders //////////////////////////////////////////////////////////////////
if(!empty($vidList_implode)){

$sql_invoice_po = "SELECT * FROM bm_vinvoice_po  WHERE invoice_id IN ($vidList_implode )";
$result = mysqli_query($conn, $sql_invoice_po);

$po_invoice_ = [];
$po_vid_ = [];

while ($row = mysqli_fetch_assoc($result)) {
    $po_vid = $row['invoice_id'];
    $po_vid_[] = $po_vid;

    $po_invoice_[$po_vid] = [
        'po_number'  => $row['po_number'],
        'po_ref'     => $row['po_ref'],
        'po_status'  => $row['po_status'],
        'po_remarks' => $row['po_remarks'],
        'po_link'    => $row['odoo_link'],
        'entry_by'   => $row['entry_by'],
        'entry_at'   => $row['entry_at'],
        'update_by'  => $row['update_by'], // fixed typo: was 'update_ny'
        'update_at'  => $row['update_at'],
    ];
}

}


// Invoice Comments //////////////////////////////////////////////////////////////////
if(!empty($vidList_implode)){
	

$sql_invoice_comment = "SELECT * FROM bm_vinvoice_comment WHERE invoice_id IN ($vidList_implode ) ORDER BY id DESC ";

$result = mysqli_query($conn, $sql_invoice_comment);

$vi_comment_ = [];

while ($row = mysqli_fetch_assoc($result)) {
    $invoice_id = $row['invoice_id'];
    $comment_id = $row['id'];

    $vi_comment_[$invoice_id][$comment_id] = [
        'id'          => $row['id'],
        'comment_txt' => $row['comment_txt'],
        'entry_by'    => $row['entry_by'],
        'entry_at'    => $row['entry_at'],
        'txt_colour'  => $row['txt_colour'],
        'update_by'   => $row['update_by'],
        'update_at'   => $row['update_at'],
    ];
}

}





$bm_prequest_ = [];
// merge both arrays
$bm_prequest_ = array_merge($pr_id_recent_,  $id_array_);
// remove duplicates
$bm_prequest_ = array_unique($bm_prequest_);
// convert to comma-separated string
 $bm_prequest_implode = implode(', ', $bm_prequest_);





// payment  Requests //////////////////////////////////////////////////////////////////
if(!empty($bm_prequest_implode)){
			
	 $sql_bm_prequest_1 = "SELECT * FROM `bm_prequest` WHERE pr_id   IN ( $bm_prequest_implode ) ORDER BY `pr_id` DESC ";
}



if($page == 'requestlist' ){
	
	

	
	 $sql_bm_prequest_1 = "SELECT * FROM `bm_prequest` WHERE `pr_year` = $year ORDER BY `pr_id` DESC ";	

////////////////////////////////////////////////////	
	 $sql_inv  = "SELECT p.pr_id, SUM(v.vi_total) AS total_vi, COUNT(v.vid) AS invoice_count 
				FROM bm_prequest AS p JOIN bm_prequest_invoice AS 
				pi ON p.pr_id = pi.pr_id JOIN bm_vinvoice AS v ON pi.invoice_id = v.vid WHERE p.pr_year = $year 
				GROUP BY p.pr_id";
	
	
	$result = mysqli_query($conn, $sql_inv);
	
	while ($row = mysqli_fetch_assoc($result)) {
		
	$invoice_count [  $row['pr_id']  ]  =	$row['invoice_count'];
		
 	$total_vi [  $row['pr_id']  ]  =	$row['total_vi'];	
		
		
	}
///////////////////////////////////	
	
	
}









$pr_ = [];
$pr_id_ = [];

if(!empty( $sql_bm_prequest_1 )){

$result = mysqli_query($conn, $sql_bm_prequest_1 );

while ($row = mysqli_fetch_assoc($result)) {
	  $pr_id = $row['pr_id']; 
  
    $pr_id_[] = $pr_id;

    $pr_[$pr_id] = [
        'pr_ref'      => $row['pr_ref'],
        'pr_date'     => $row['pr_date'],
        'pr_year'     => $row['pr_year'],
        'pr_status'   => $row['pr_status'],
        'payto'       => $row['payto'],
        'remarks'     => $row['remarks'],
        'prepared_by' => $row['prepared_by'],
        'entry_by'    => $row['entry_by'],
        'entry_at'    => $row['entry_at'],
        'update_by'   => $row['update_by'],
        'update_at'   => $row['update_at'],
        
		'paid_date'   => $row['paid_date'],
		'paid_notes'   => $row['paid_notes'],
		'paid_by'   => $row['paid_by'],
		
		
    ];
}

} /// IF END ////














// Programs //////////////////////////////////////////////////////////////////
$sql_pro = "SELECT * FROM `program`";
$result = mysqli_query($conn, $sql_pro);

$program_ = [];

while ($row = mysqli_fetch_assoc($result)) {
    $program_id = $row['id'];

    $program_[$program_id] = [
        'name'     => $row['program_name'],
        'remarks'  => $row['program_remarks'],
        'status'   => $row['status'],
        'business' => $row['business'],
    ];
}


///Bank Account //////////////////////////////////////////////////////////////////

$sql_bank_ac = "SELECT * FROM `bank_accounts`";
/// `account_id`, `account_name`, `account_number`, `account_bank`, `account_status`, `added_by`, `updated_by`, `created_at`, `updated_at`

$result = mysqli_query($conn, $sql_bank_ac);

$bank_account_ = [];

while ($row = mysqli_fetch_assoc($result)) {
	
 $account_id = $row['account_id'];

$bank_account_[$row['account_id']] = [
    'account_id'     => $row['account_id'],
    'account_name'   => $row['account_name'],
    'account_number' => $row['account_number'],
    'account_bank'   => $row['account_bank'],
    'account_status' => $row['account_status'],
    'added_by'       => $row['added_by'],
    'updated_by'     => $row['updated_by'],
    'created_at'     => $row['created_at'],
    'updated_at'     => $row['updated_at']
];

}



// Vendors ////////////////////////////////////////////////////////////////
$sql_vendor_list = "SELECT * FROM `vendor`";
$result = mysqli_query($conn, $sql_vendor_list);

$vendor_ = [];
$userids_ = [];

while ($row = mysqli_fetch_assoc($result)) {
    $vendor_id = $row['vendor_id'];
    $vendor_[$vendor_id] = [
        'vendor_name'   => $row['vendor_name'],
        'vendor_tin'    => $row['vendor_tin'],
        'vendor_contact'=> $row['vendor_contact'],
        'notes'         => $row['notes'],
        'status'        => $row['status'],
        'created_by'    => $row['created_by'],
        'edited_by'     => $row['edited_by'],
        'created_at'    => $row['created_at'],
        'updated_at'    => $row['updated_at'],
    ];

    $userids_[] = $row['created_by'];
    $userids_[] = $row['edited_by'];
}




?>
