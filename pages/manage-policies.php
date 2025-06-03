<?php
$page_title = "Manage Policies";
include('../partials/html-head.php');
include('../partials/components/left-bar.php');
?>

<main>
  <?php include('../partials/components/top-bar.php'); ?>
  <div class="content">
    <!-- Section 1 -->
    <section class="section container-column gap-32">
      <!-- Title Row -->
      <h1>Manage Policies</h1>
      <!-- Action Bar -->
      <div class="container-row gap-24 space-between">
        <!-- Column 1 -->
        <div class="container-row gap-0">
          <button class="btn btn-primary">
            <iconify-icon
              icon="material-symbols:add-circle-outline-rounded"
              class="icon"
            ></iconify-icon>
            <span>Add Policy</span>
          </button>
        </div>
        <!-- Column 2 -->
        <div class="container-row gap-16" style="justify-content: end">
          <!-- Stats -->
          <div
            class="container-column gap-0"
            style="text-align: right; width: auto"
          >
            <small>Total</small>
            <p class="color-active">5 Policies</p>
          </div>
          <!-- Dropdown -->
          <div class="dropdown" style="width: 200px">
            <button class="dropdown-toggle" id="selectedValue">
              <div class="selected-content">
                <iconify-icon
                  class="selected-icon icon"
                  icon="flat-color-icons:globe"
                ></iconify-icon>
                <span class="selected">All Countries</span>
              </div>
              <iconify-icon
                icon="material-symbols:expand-more-rounded"
                class="icon chevron-icon"
              ></iconify-icon>
            </button>
            <ul class="dropdown-menu">
              <li data-value="1" class="selected">
                <iconify-icon
                  icon="flat-color-icons:globe"
                  class="icon"
                ></iconify-icon>
                All Countries
              </li>
              <li data-value="2">
                <iconify-icon
                  icon="twemoji:flag-botswana"
                  class="icon"
                ></iconify-icon>
                Botswana
              </li>
              <li data-value="3">
                <iconify-icon
                  icon="twemoji:flag-cambodia"
                  class="icon"
                ></iconify-icon>
                Cambodia
              </li>
              <li data-value="3">
                <iconify-icon
                  icon="twemoji:flag-eswatini"
                  class="icon"
                ></iconify-icon>
                Eswatini
              </li>
              <li data-value="3">
                <iconify-icon
                  icon="twemoji:flag-lesotho"
                  class="icon"
                ></iconify-icon>
                Lesotho
              </li>
              <li data-value="3">
                <iconify-icon
                  icon="twemoji:flag-malaysia"
                  class="icon"
                ></iconify-icon>
                Malaysia
              </li>
              <li data-value="3">
                <iconify-icon
                  icon="twemoji:flag-namibia"
                  class="icon"
                ></iconify-icon>
                Namibia
              </li>
              <li data-value="3">
                <iconify-icon
                  icon="twemoji:flag-sierra-leone"
                  class="icon"
                ></iconify-icon>
                Sierra Leone
              </li>
              <li data-value="3">
                <iconify-icon
                  icon="twemoji:flag-uganda"
                  class="icon"
                ></iconify-icon>
                Uganda
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Table -->
      <div class="table-wrapper">
        <table class="table">
          <!-- Table Header -->
          <thead>
            <tr>
              <th>Policy</th>
              <th>Category</th>
              <th>Country</th>
              <th>Version</th>
              <th>Created</th>
              <th style="width: 160px; text-align: center">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Table Row 1 -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button
                  class="btn btn-primary fullwidth center"
                  data-role="open-edit-policy"
                >
                  Edit</button
                ><button class="btn btn-outline fullwidth center">Logs</button>
              </td>
            </tr>
            <!-- Table Row 2 -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center">Edit</button
                ><button class="btn btn-outline fullwidth center">Logs</button>
              </td>
            </tr>
            <!-- Table Row 3 -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center">Edit</button
                ><button class="btn btn-outline fullwidth center">Logs</button>
              </td>
            </tr>
            <!-- Table Row 4 -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center">Edit</button
                ><button class="btn btn-outline fullwidth center">Logs</button>
              </td>
            </tr>
            <!-- Table Row 5 -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center">Edit</button
                ><button class="btn btn-outline fullwidth center">Logs</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</main>

<!-- Edit Policy Modal -->
<div id="editPolicyModal" class="modal-overlay hidden">
  <!-- Modal Body -->
  <div class="modal">
    <!-- Modal Header -->
    <div class="modal-header space-between">
      <h2>Edit Policy</h2>
      <button class="btn btn-ghost modal-close">✕</button>
    </div>
    <!-- Input Field Group -->
    <div class="modal-body container-column gap-16">
      <!-- Input Field 1 -->
      <label class="container-column gap-8">
        <span class="label">Title</span>
        <input type="text" class="input-field" value="Uganda Visa" />
      </label>
      <!-- Input Field 2 -->
      <label class="container-column gap-8">
        <span class="label">Category</span>
        <!-- Dropdown -->
        <div class="dropdown">
          <button class="dropdown-toggle" id="selectedValue">
            <div class="selected-content">
              <span class="selected">Option 1</span>
            </div>
            <iconify-icon
              icon="material-symbols:expand-more-rounded"
              class="icon chevron-icon"
            ></iconify-icon>
          </button>
          <ul class="dropdown-menu">
            <li data-value="1" class="selected">Option 1</li>
            <li data-value="2">Option 2</li>
            <li data-value="3">Option 3</li>
          </ul>
        </div>
      </label>
      <!-- Input Field 3 -->
      <label class="container-column gap-8">
        <span class="label">Country</span>
        <input type="text" class="input-field" value="Uganda" />
      </label>
      <!-- Input Field 4 -->
      <label class="container-column gap-8">
        <span class="label">Policy Text</span>
        <textarea rows="6" class="input-field">
Foreign nationals enrolled in Ugandan educational institutions are eligible for a student pass...</textarea
        >
      </label>
    </div>
    <!-- Modal Footer -->
    <div class="modal-footer container-row gap-16 space-between">
      <button class="btn btn-primary">Update Policy</button>
      <button class="btn btn-outline modal-close">Cancel</button>
    </div>
  </div>
</div>

<?php include('../partials/html-foot.php'); ?>
