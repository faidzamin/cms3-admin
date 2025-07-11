<?php
$page_title = "Dashboard";
include('../../partials/html-head.php');
include('../../partials/components/left-bar/lb-application-portal.php');
?>

<main>
  <?php include('../../partials/components/top-bar/tb-application-portal.php'); ?>
  <div class="content">
    <!-- Section 1: Main Dashboard Content -->
    <section class="section container-column gap-32">
      <!-- Title Row: User Welcome -->
      <div class="container-column gap-12">
        <p>Welcome</p>
        <h1>Sharifudin Hashim</h1>
      </div>

      <!-- Card Group: Dashboard Menu Cards -->
      <div class="container-column gap-16">
        <!-- Card Row 1: Core Policy & Q&A Actions -->
        <div class="container-row gap-16">
          <!-- Manage Policies Card -->
          <a href="manage-policies.php" class="card-column-0px card-link">
            <div class="card-status-none"></div>
            <div class="card-title-icon">
              <iconify-icon icon="material-symbols:policy-outline-rounded" class="icon"></iconify-icon>
            </div>
            <div class="card-menu-content">
              <div class="container-column gap-4">
                <h4>Manage Policies</h4>
                <h2>20</h2>
                <div class="container-row gap-8">
                  <small class="fullwidth">Policies</small>
                  <iconify-icon icon="material-symbols:arrow-forward-rounded" class="icon" style="color: var(--white-90)"></iconify-icon>
                </div>
              </div>
            </div>
          </a>

          <!-- Compare Policies Card -->
          <div class="card-column-0px">
            <div class="card-status-none"></div>
            <div class="card-title-icon">
              <iconify-icon icon="material-symbols:text-compare-outline-rounded" class="icon"></iconify-icon>
            </div>
            <div class="card-menu-content">
              <div class="container-column gap-4">
                <h4>Compare Policies</h4>
                <h2 class="transparent">00</h2>
                <div class="container-row gap-8">
                  <small class="fullwidth transparent">Description</small>
                  <iconify-icon icon="material-symbols:arrow-forward-rounded" class="icon" style="color: var(--white-90)"></iconify-icon>
                </div>
              </div>
            </div>
          </div>

          <!-- Ask Questions Card -->
          <div class="card-column-0px">
            <div class="card-status-none"></div>
            <div class="card-title-icon">
              <iconify-icon icon="material-symbols:help-outline-rounded" class="icon"></iconify-icon>
            </div>
            <div class="card-menu-content">
              <div class="container-column gap-4">
                <h4>Ask Questions</h4>
                <h2 class="transparent">00</h2>
                <div class="container-row gap-8">
                  <small class="fullwidth transparent">Description</small>
                  <iconify-icon icon="material-symbols:arrow-forward-rounded" class="icon" style="color: var(--white-90)"></iconify-icon>
                </div>
              </div>
            </div>
          </div>

          <!-- Q&A Stats Card -->
          <div class="card-column-0px">
            <div class="card-status-none"></div>
            <div class="card-title-icon">
              <iconify-icon icon="material-symbols:insert-chart-outline-rounded" class="icon"></iconify-icon>
            </div>
            <div class="card-menu-content">
              <div class="container-column gap-4">
                <h4>Q&A Stats</h4>
                <h2 class="transparent">00</h2>
                <div class="container-row gap-8">
                  <small class="fullwidth transparent">Description</small>
                  <iconify-icon icon="material-symbols:arrow-forward-rounded" class="icon" style="color: var(--white-90)"></iconify-icon>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card Row 2: Secondary Q&A and User Management -->
        <div class="container-row gap-16">
          <!-- Q&A by Policy Card -->
          <div class="card-column-0px">
            <div class="card-status-none"></div>
            <div class="card-title-icon">
              <iconify-icon icon="material-symbols:shield-question-outline-rounded" class="icon"></iconify-icon>
            </div>
            <div class="card-menu-content">
              <div class="container-column gap-4">
                <h4>Q&A by Policy</h4>
                <h2 class="transparent">00</h2>
                <div class="container-row gap-8">
                  <small class="fullwidth transparent">Description</small>
                  <iconify-icon icon="material-symbols:arrow-forward-rounded" class="icon" style="color: var(--white-90)"></iconify-icon>
                </div>
              </div>
            </div>
          </div>

          <!-- Add Users Card -->
          <div class="card-column-0px">
            <div class="card-status-none"></div>
            <div class="card-title-icon">
              <iconify-icon icon="material-symbols:group-add-outline-rounded" class="icon"></iconify-icon>
            </div>
            <div class="card-menu-content">
              <div class="container-column gap-4">
                <h4>Add Users</h4>
                <h2>5</h2>
                <div class="container-row gap-8">
                  <small class="fullwidth">Users</small>
                  <iconify-icon icon="material-symbols:arrow-forward-rounded" class="icon" style="color: var(--white-90)"></iconify-icon>
                </div>
              </div>
            </div>
          </div>

          <!-- Placeholder Card 1 (for layout) -->
          <div class="card-column-0px transparent"></div>
          <!-- Placeholder Card 2 (for layout) -->
          <div class="card-column-0px transparent"></div>
        </div>
      </div>
    </section>

    <!-- Section 2: Additional Dashboard Content (e.g., Recent Activity, Quick Links) -->
    <section class="section container-column gap-32">
      <!-- Content for Section 2 will go here -->
    </section>
  </div>
</main>

<?php include('../../partials/html-foot.php'); ?>