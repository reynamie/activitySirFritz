// ===================== 🧾 Save Form =====================
function frmSave(e) {
  e.preventDefault();

  let fullname    = $("#txtName").val();
  let dtBirthdate = $("#dtBirth").val();
  let age         = $("#txtAge").val();
  let civilStatus = $("#txtCivilStatus").val();
  let contactNo   = $("#txtContact").val();
  let birthPlace  = $("#txtPlaceBirth").val();
  let gender      = $("#txtGender").val();
  let email       = $("#txtEmail").val();
  let section     = $("#txtSection").val();
  let yearLevel   = $("#txtYearLevel").val();
  let sports      = $("#txtSports").val();

  $.post("module/sportsModule/action/addPlayer.php", {
    fullname,
    dtBirthdate,
    age,
    civilStatus,
    contactNo,
    birthPlace,
    gender,
    email,
    section,
    yearLevel,
    sports
  }, function (data) {
    if (data.trim() === "success") {
      $("#mdlAdd").modal("hide");
      getPlayer();
      $("form")[0].reset();
    } else {
      alert("Error saving player: " + data);
    }
  });
}

// ===================== 🧮 Auto Calculate Age =====================
function calculateAge() {
  let birthdate = $("#dtBirth").val();
  if (!birthdate) return $("#txtAge").val("");

  let today = new Date();
  let birth = new Date(birthdate);
  let age = today.getFullYear() - birth.getFullYear();
  let month = today.getMonth() - birth.getMonth();

  if (month < 0 || (month === 0 && today.getDate() < birth.getDate())) {
    age--;
  }

  $("#txtAge").val(age);
}

// ===================== 📋 Load Player Data =====================
function getPlayer() {
  $.ajax({
    url: "module/sportsModule/action/getData.php",
    method: "GET",
    dataType: "json",
    beforeSend: function () {
      $("#getPlayerData").html(`
        <tr><td colspan="8" class="text-center py-3">Loading...</td></tr>
      `);
    },
    success: function (data) {
      if (!Array.isArray(data) || data.length === 0) {
        $("#getPlayerData").html(`
          <tr><td colspan="8" class="text-center py-3">No players found.</td></tr>
        `);
        return;
      }

      let rows = "";
      data.forEach((row, index) => {
        rows += `
          <tr>
            <td>${index + 1}</td>
            <td>${row.student_name || "-"}</td>
            <td>${row.gender || "-"}</td>
            <td>${row.contact || "-"}</td>
            <td>${row.year || "-"}</td>
            <td>${row.section || "-"}</td>
            <td>${row.sports || "-"}</td>
            <td>
             <div class="d-flex gap-2">
              <button class="btn btn-sm btn-warning text-dark edit-btn" data-id="${row.id}">  <i class="bi bi-pencil"></i></button>
              |
              <button class="btn btn-danger btn-sm delete-btn" data-id="${row.id}"> <i class="bi bi-trash"></i></button>
             
             </div>
            </td>
          </tr>
        `;
      });
      $("#getPlayerData").html(rows);
    },
    error: function (xhr, status, error) {
      console.error("❌ AJAX Error:", error);
      $("#getPlayerData").html(`
        <tr><td colspan="8" class="text-danger text-center py-3">Error loading data</td></tr>
      `);
    },
  });
}

// ===================== 🗑️ DELETE PLAYER (using modal) =====================
let deleteID = null;

$(document).on("click", ".delete-btn", function () {
  deleteID = $(this).data("id");
  $("#deleteModal").modal("show");
});

$("#confirmDeleteBtn").on("click", function () {
  if (!deleteID) return;

  $.post("module/sportsModule/action/deletePlayer.php", { id: deleteID }, function (response) {
    if (response.trim() === "success") {
      $("#deleteModal").modal("hide");
      getPlayer();
    } else {
      alert("Failed to delete player: " + response);
    }
  });
});


// ===================== 🔍 SEARCH PLAYER =====================
$(document).ready(function () {
  // Prevent form reload
  $(".search-form").on("submit", function (e) {
    e.preventDefault();
  });

  // Handle typing in search input
  $("#playerSearch").on("keyup", function () {
    const value = $(this).val().toLowerCase();

    // Filter table rows based on text content
    $("#getPlayerData tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});

// ===================== 🟢 Run When Page Loads =====================
$(document).ready(function () {
  getPlayer();
});


// ===================== ✏️ EDIT PLAYER =====================
$(document).on("click", ".edit-btn", function () {
  const id = $(this).data("id");

  // Fetch player info from database
  $.ajax({
    url: "module/sportsModule/action/getData.php",
    method: "POST",
    data: { id },
    dataType: "json",
    success: function (data) {
      if (data) {
        $("#txtName").val(data.student_name);
        $("#dtBirth").val(data.birthdate);
        $("#txtAge").val(data.age);
        $("#txtCivilStatus").val(data.civil_status);
        $("#txtContact").val(data.contact);
        $("#txtPlaceBirth").val(data.birthPlace);
        $("#txtGender").val(data.gender);
        $("#txtEmail").val(data.email);
        $("#txtSection").val(data.section);
        $("#txtYearLevel").val(data.year);
        $("#txtSports").val(data.sports);
        $("#mdledit").attr("data-id", id); // store ID for updating later
        $("#mdledit").modal("show");
      } else {
        alert("⚠️ Player data not found!");
      }
    },
    error: function (xhr, status, error) {
      console.error("❌ Error fetching player:", error);
    },
  });
});
// ===================== ✏️ EDIT PLAYER =====================
$(document).on("click", ".edit-btn", function () {
  const id = $(this).data("id");

  $.ajax({
    url: "module/sportsModule/action/getPlayerById.php", // ✅ correct file
    method: "POST",
    data: { id },
    dataType: "json",
    success: function (data) {
      if (data) {
        // ✅ Fill modal fields
        $("#editPlayerId").val(data.id);
        $("#editName").val(data.student_name);
        $("#editBirth").val(data.birthdate);
        $("#editAge").val(data.age);
        $("#editCivilStatus").val(data.civil_status);
        $("#editContact").val(data.contact);
        $("#editBirthPlace").val(data.birthPlace);
        $("#editGender").val(data.gender);
        $("#editEmail").val(data.email);
        $("#editSection").val(data.section);
        $("#editYearLevel").val(data.year);
        $("#editSports").val(data.sports);

        $("#mdledit").modal("show");
      } else {
        alert("⚠️ Player not found!");
      }
    },
    error: function (xhr, status, error) {
      console.error("❌ Error fetching player:", error);
    },
  });
});

// ===================== 💾 SAVE EDITED PLAYER =====================
function frmEdit(e) {
  e.preventDefault();

  const id           = $("#editPlayerId").val();
  const fullname     = $("#editName").val();
  const dtBirthdate  = $("#editBirth").val();
  const age          = $("#editAge").val();
  const civilStatus  = $("#editCivilStatus").val();
  const contactNo    = $("#editContact").val();
  const birthPlace   = $("#editBirthPlace").val();
  const gender       = $("#editGender").val();
  const email        = $("#editEmail").val();
  const section      = $("#editSection").val();
  const yearLevel    = $("#editYearLevel").val();
  const sports       = $("#editSports").val();

  $.ajax({
    url: "module/sportsModule/action/updatePlayer.php",
    method: "POST",
    data: {
      id,
      fullname,
      dtBirthdate,
      age,
      civilStatus,
      contactNo,
      birthPlace,
      gender,
      email,
      section,
      yearLevel,
      sports
    },
    success: function (response) {
      if (response.trim() === "success") {
        $("#mdledit").modal("hide"); // ✅ correct modal
        getPlayer();
        $("#frmEdit")[0]?.reset();
      } else {
        alert("❌ Failed to update: " + response);
      }
    },
    error: function (xhr, status, error) {
      console.error("❌ Error updating player:", error);
    },
  });
}

// ===================== 🧮 AUTO CALCULATE AGE (for edit) =====================
function calculateEditAge() {
  let birthdate = $("#editBirth").val();
  if (!birthdate) return $("#editAge").val("");

  let today = new Date();
  let birth = new Date(birthdate);
  let age = today.getFullYear() - birth.getFullYear();
  let month = today.getMonth() - birth.getMonth();

  if (month < 0 || (month === 0 && today.getDate() < birth.getDate())) {
    age--;
  }

  $("#editAge").val(age);
}
