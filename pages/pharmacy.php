<?php
  include 'layout/html.php';
?>
    <!-- HEADER PAGE STARTS HERER -->
    <?php
      include('layout/header.php');
   ?>
    <!-- MAIN PAGE STARTS HERE -->
    <main>
      <div class="table-container">
        <table class="medicine-table">
          <tr>
            <th class="table-head med-id">ID</th>
            <th class="table-head med-name">Name of medicine</th>
            <th class="table-head med-count">Available medicine</th>
            <th class="table-head med-cost">Cost of Medicine</th>
            <th class="table-head med-order">Buy</th>
          </tr>
          <tr>
            <td class="med-id">9284</td>
            <td class="med-name">Pharastamol</td>
            <td class="med-count">245</td>
            <td class="med-cost">75.00 birr</td>
            <td class="med-order"><div class="btn center-inside">Buy</div></td>
          </tr>
          <tr>
            <td class="med-id">9284</td>
            <td class="med-name">Pharastamol</td>
            <td class="med-count">245</td>
            <td class="med-cost">75.00 birr</td>
            <td class="med-order"><div class="btn center-inside">Buy</div></td>
          </tr>
          <tr>
            <td class="med-id">9284</td>
            <td class="med-name">Pharastamol</td>
            <td class="med-count">245</td>
            <td class="med-cost">75.00 birr</td>
            <td class="med-order"><div class="btn center-inside">Buy</div></td>
          </tr>
          <tr>
            <td class="med-id">9284</td>
            <td class="med-name">Pharastamol</td>
            <td class="med-count">245</td>
            <td class="med-cost">75.00 birr</td>
            <td class="med-order"><div class="btn center-inside">Buy</div></td>
          </tr>
          <tr>
            <td colspan="5" class="med-control">
              <div class="btn center-inside">Add new medicine</div>
            </td>
          </tr>
        </table>
      </div>
    </main>
    <!-- FOOTER PAGE STARTS HERE -->
    <?php
      include('layout/footer.php');
    ?>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
