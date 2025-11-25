<?php

include '../../conn.php';

$id= $_GET['id'];

$page = $_GET['page'];


include 'bm_pettycash_sql.php';

/*
if (empty($pr_invoice_id)) {
    echo 'No Preview';
    exit;
}
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment Request</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    .header { margin-bottom: 15px; }
    .header-top {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }
    .header-left h3 {
      margin: 0;
    }
    .header-left small {
      display: block;
      font-size: 0.8em;
      color: #555;
    }
    .header-right p {
      margin: 0;
      text-align: right;
    }
    .header-center {
      text-align: center;
      margin: 10px 0;
    }
    .header-center h3 {
      margin: 0;
      text-decoration: underline;
    }
    .payto {
      margin-top: 5px;
      font-size: 0.95em;
    }
    table { width: 100%; border-collapse: collapse; margin-top: 15px; }
    th, td { border: 1px solid #000; padding: 3px; text-align: center; }
    th { background: #f2f2f2; }
    .footer { margin-top: 20px; }
    .footer div { margin-top: 10px; }

    /* Print settings */
    @page {
      size: A5 landscape;
      margin: 15mm;
    }
    @media print {
      body {
        margin: 0;
        font-size: 11px;
      }
      table {
        font-size: 10px;
      }
    }
  </style>
</head>
<body>

<?php
///print_r($pr_);
?>
  <!-- Header -->
  <div class="header">
    <div class="header-top">
      <div class="header-left">
        <h3>Beach Mart Kudahuvadhoo</h3>
        <small>Beach Investment Pvt Ltd</small>
      </div>
      <div class="header-right">
        <p>No: <?php echo $pr_[$id]['pr_year']; ?>/ <?php echo $pr_[$id]['pr_ref']; ?></p>
        <p>Date: <?php echo $pr_[$id]['pr_date']; ?></p>
      </div>
    </div>

    <div class="header-center">
      <h2>Payment Request : <?php echo $pr_[$id]['pr_year']; ?> / <?php echo $pr_[$id]['pr_ref']; ?> </h2>
    </div>

    <div class="payto">
      <strong>Pay To:</strong> 
      
      <?php echo $bank_account_[  $pr_[$id]['payto']  ]['account_name'];  ?> |
            		<?php echo $bank_account_[   $pr_[$id]['payto']   ]['account_number'];  ?> |
            			<?php echo $bank_account_[ $pr_[$id]['payto'] ]['account_bank'];  ?>
      
      
      
      ||> <strong>  Remarks: <?php echo $pr_[$id]['remarks']; ?> </strong>
    </div>
  </div>

  <div class="table-responsive">
  <table class="table table-bordered table-striped table-hover align-middle">
    <thead class="table-dark">
      <tr>
        <th>#</th>
        <th>Invoice</th>
        <th>Vendor Name</th>
        <th>Ref No / Date</th>
        
        <th>Amount</th>
        <th>B.Activity</th>
        <th>Remarks</th>
        <th>P Status</th>
       
      </tr>
    </thead>
    <tbody>
      <?php 
      $counter = 1;
      $total_amount = 0;

      if (!empty($pr_invoice_[$id])): 
        foreach ($pr_invoice_[$id] as $inv_id => $inv_data): 
			
          $invoice = $vinvoice_[$inv_id];
          $vendorName = htmlspecialchars($vendor_[$invoice['vi_vendor_id']]['vendor_name']);
          $amount = number_format($invoice['vi_total'], 2);
          $total_amount += $invoice['vi_total'];
      ?>
        <tr>
          <!-- Row counter -->
          <td><?php echo $counter++; ?></td>

          <!-- Invoice ID -->
          <td><?php echo 'PI' . htmlspecialchars($invoice['vi_year']) . '/' . htmlspecialchars($invoice['vi_no']); ?></td>

          <!-- Vendor -->
          <td>
            <?php 
              echo $vendorName;
             
            ?>
          </td>

          <!-- Ref No -->
          <td><?php echo htmlspecialchars($invoice['vi_ref']); ?>
			 | 
          <!-- Date -->
         <?php echo htmlspecialchars($invoice['vi_date']); ?></td>

          <!-- Amount -->
          <td>
            <?php 
              echo $amount;
            ?>
          </td>

          <!-- B.Activity / Cost Centre -->
          <td><?php echo htmlspecialchars($program_[$invoice['vi_costcentre']]['name']);
		  
		   if (in_array($inv_id, $po_vid_)) {
                echo ' : <strong> ' . htmlspecialchars($po_invoice_[$inv_id]['po_number']) . '</strong>';
              }
		  
		  
		   ?></td>

          <!-- Remarks -->
          <td><?php echo htmlspecialchars($invoice['vi_details']); ?></td>

          <!-- Payment Status -->
          <td>
            <?php echo in_array($inv_id, $pvid_) ? 'Paid' : 'Not Paid'; ?>
          </td>

          
        </tr>
      <?php endforeach; endif; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4" class="text-end"><strong>Total</strong></td>
        <td><?php echo number_format($total_amount, 2); ?></td>
        <td colspan="3"></td>
      </tr>
    </tfoot>
  </table>
</div>

<!-- Footer -->
<div class="footer">
  <div class="footer-row">
    <div class="total"><span>Total: <?php echo number_format($total_amount, 2); ?></span></div>
    <div><span>Prepared by: aayan</span></div>
    <div><span>abd. Hanyf</span></div>
    <div><span>Cash Received:</span></div>
  </div>
</div>

<style>
  .footer-row {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
  }
  .footer-row div {
    flex: 1;
  }
  .footer-row .total span {
    font-size: 1.5em;
    font-weight: bold;
  }
</style>

<?php

?>
