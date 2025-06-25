<?php
$page_title = "Manage Policies";
include('../../partials/html-head.php');
include('../../partials/components/left-bar/lb-policies.php');
?>

<main>
  <?php include('../../partials/components/top-bar/tb-policies.php'); ?>
  <div class="content">
    <!-- Section 1: Manage Policies Page Content -->
    <section class="section container-column gap-32">
      <!-- Page Title -->
      <div class="container-row gap-12 items-center">
        <iconify-icon icon="material-symbols:policy-outline-rounded" class="title-icon"></iconify-icon>
        <h1 style="margin: 0;">Manage Policies</h1>
      </div>

      <!-- Action Bar: Controls for adding policies and filtering -->
      <div class="container-row gap-24 space-between">
        <!-- Add Policy Button Area -->
        <div class="container-row gap-0">
          <button class="btn btn-primary">
            <iconify-icon icon="material-symbols:add-circle-outline-rounded" class="icon"></iconify-icon>
            <span>Add Policy</span>
          </button>
        </div>

        <!-- Filters and Stats Area -->
        <div class="container-row gap-16" style="justify-content: end">
          <!-- Policy Count Stats -->
          <div class="container-column gap-0" style="text-align: right; width: auto">
            <small>Total</small>
            <p class="color-active">5 Policies</p>
          </div>
          <!-- Country Filter Dropdown -->
          <div class="dropdown" style="width: 200px">
            <button class="dropdown-toggle" id="selectedValue">
              <div class="selected-content">
                <iconify-icon class="selected-icon icon" icon="flat-color-icons:globe"></iconify-icon>
                <span class="selected">All Countries</span>
              </div>
              <iconify-icon icon="material-symbols:expand-more-rounded" class="icon chevron-icon"></iconify-icon>
            </button>
            <ul class="dropdown-menu">
              <!-- Dropdown Item: All Countries -->
              <li data-value="1" class="selected">
                <iconify-icon icon="flat-color-icons:globe" class="icon"></iconify-icon>
                All Countries
              </li>
              <!-- Dropdown Item: Botswana -->
              <li data-value="2">
                <iconify-icon icon="twemoji:flag-botswana" class="icon"></iconify-icon>
                Botswana
              </li>
              <!-- Add other countries as needed -->
              <li data-value="3"><iconify-icon icon="twemoji:flag-cambodia" class="icon"></iconify-icon> Cambodia </li>
              <li data-value="3"><iconify-icon icon="twemoji:flag-eswatini" class="icon"></iconify-icon> Eswatini </li>
              <li data-value="3"><iconify-icon icon="twemoji:flag-lesotho" class="icon"></iconify-icon> Lesotho </li>
              <li data-value="3"><iconify-icon icon="twemoji:flag-malaysia" class="icon"></iconify-icon> Malaysia </li>
              <li data-value="3"><iconify-icon icon="twemoji:flag-namibia" class="icon"></iconify-icon> Namibia </li>
              <li data-value="3"><iconify-icon icon="twemoji:flag-sierra-leone" class="icon"></iconify-icon> Sierra Leone </li>
              <li data-value="3"><iconify-icon icon="twemoji:flag-uganda" class="icon"></iconify-icon> Uganda </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Policies Table -->
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
          <!-- Table Body: Policy Rows -->
          <tbody>
            <!-- Example Table Row 1 (Replace with dynamic data) -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center" data-role="open-edit-policy"><span>Edit</span></button>
                <button class="btn btn-outline fullwidth center"><span>Logs</span></button>
              </td>
            </tr>
            <!-- Example Table Row 2 (Replace with dynamic data) -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center"><span>Edit</span></button>
                <button class="btn btn-outline fullwidth center"><span>Logs</span></button>
              </td>
            </tr>
            <!-- Example Table Row 3 (Replace with dynamic data) -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center"><span>Edit</span></button>
                <button class="btn btn-outline fullwidth center"><span>Logs</span></button>
              </td>
            </tr>
            <!-- Example Table Row 4 (Replace with dynamic data) -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center"><span>Edit</span></button>
                <button class="btn btn-outline fullwidth center"><span>Logs</span></button>
              </td>
            </tr>
            <!-- Example Table Row 5 (Replace with dynamic data) -->
            <tr>
              <td>Policy Name</td>
              <td>Visa</td>
              <td>Country Name</td>
              <td>Version 1</td>
              <td>2025-05-31</td>
              <td class="cell-center cell-actions">
                <button class="btn btn-primary fullwidth center"><span>Edit</span></button>
                <button class="btn btn-outline fullwidth center"><span>Logs</span></button>
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
  <div class="modal">
    <!-- Modal Header: Title and Close Button -->
    <div class="modal-header space-between">
      <h2>Edit Policy</h2>
      <button class="btn btn-ghost modal-close"><span>✕</span></button>
    </div>
    <!-- Modal Body: Edit Policy Form -->
    <div class="modal-body container-column gap-16">
      <!-- Input Field: Policy Title -->
      <label class="container-column gap-8">
        <span class="label">Title</span>
        <input type="text" class="input-field" value="Uganda Visa" />
      </label>
      <!-- Input Field: Policy Category Dropdown -->
      <label class="container-column gap-8">
        <span class="label">Category</span>
        <div class="dropdown">
          <button class="dropdown-toggle" id="selectedValue">
            <div class="selected-content">
              <span class="selected">Option 1</span>
            </div>
            <iconify-icon icon="material-symbols:expand-more-rounded" class="icon chevron-icon"></iconify-icon>
          </button>
          <ul class="dropdown-menu">
            <li>Option 1</li>
            <li>Option 2</li>
            <li>Option 3</li>
          </ul>
        </div>
      </label>
      <!-- Input Field: Policy Country -->
      <label class="container-column gap-8">
        <span class="label">Country</span>
        <input type="text" class="input-field" value="Uganda" />
      </label>
      <!-- Input Field: Policy Text Area -->
      <label class="container-column gap-8">
        <span class="label">Policy Text</span>
        <textarea rows="6" class="input-field">
Foreign nationals enrolled in Ugandan educational institutions are eligible for a student pass...</textarea>
      </label>
    </div>
    <!-- Modal Footer: Action Buttons -->
    <div class="modal-footer container-row gap-16 space-between">
      <button class="btn btn-primary"><span>Update Policy</span></button>
      <button class="btn btn-outline modal-close"><span>Cancel</span></button>
    </div>
  </div>
</div>

<?php include('../../partials/html-foot.php'); ?>