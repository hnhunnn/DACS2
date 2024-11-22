// button cuộn list phim
document.addEventListener("DOMContentLoaded", function () {
    const scroll = document.querySelector(".movie-grid");

    // Hàm cuộn sang trái
    function scrollLeft() {
        scroll.scrollBy({ left: -300, behavior: "smooth" });
    }

    // Hàm cuộn sang phải
    function scrollRight() {
        scroll.scrollBy({ left: 300, behavior: "smooth" });
    }

    // Gán sự kiện cho các nút
    document.querySelector(".left").onclick = scrollLeft;
    document.querySelector(".right").onclick = scrollRight;
});

function scrollLeft() {
    const container = document.querySelectorAll(".movie-grid")[1]; // Danh sách phim thứ 2
    container.scrollBy({
        left: -300, // Điều chỉnh khoảng cách cuộn
        behavior: "smooth",
    });
}

function scrollRight() {
    const container = document.querySelectorAll(".movie-grid")[1]; // Danh sách phim thứ 2
    container.scrollBy({
        left: 300, // Điều chỉnh khoảng cách cuộn
        behavior: "smooth",
    });
}

function scrollLeft2() {
    const container = document.querySelectorAll(".movie-grid")[1]; // Danh sách phim thứ 2
    container.scrollBy({
        left: -300, // Điều chỉnh khoảng cách cuộn
        behavior: "smooth",
    });
}

function scrollRight2() {
    const container = document.querySelectorAll(".movie-grid")[1]; // Danh sách phim thứ 2
    container.scrollBy({
        left: 300, // Điều chỉnh khoảng cách cuộn
        behavior: "smooth",
    });
}




// HIỂN THỊ CHI NHÁNH KHI NHẤN VÀO LOGO

function showBranches(cinemaId) {
    
    fetch(`/cinema/${cinemaId}/branch`)
        .then((response) => response.json())
        .then((branches) => {
            const branchContainer = document.getElementById("branch-container");
            branchContainer.style.display = "block";
            branchContainer.innerHTML = ""; // Xóa nội dung cũ

            branches.forEach((branch) => {
                const branchDiv = document.createElement("div");
                branchDiv.className = "branch-item";
                branchDiv.innerHTML = `
                  <h4>${branch.branchName}</h4>
                  <p>${branch.address}</p>
              `;
                branchContainer.appendChild(branchDiv);
            });
        })
        .catch((error) => console.error("Error:", error));
}

// HIỂN THỊ LỊCH CHIẾU KHI BẤM VÀO CHI NHÁNH
function showSchedules(branch_id) {
    // console.log("Function showSchedules called with Branch ID:", branch_id); // Kiểm tra xem hàm có được gọi không

    fetch(`/branch/${branch_id}/schedule`)
        .then((response) => response.json())
        .then((schedules) => {
            // console.log("Schedules:", schedules); // Kiểm tra dữ liệu trả về từ server

            const scheduleContainer =
                document.getElementById("schedule-container");
            scheduleContainer.innerHTML = ""; // Xóa nội dung cũ

            schedules.forEach((schedule) => {
                const scheduleDiv = document.createElement("div");
                scheduleDiv.className = "schedule-item";
                scheduleDiv.innerHTML = `
                  <h4>${schedule.movie.movieName}</h4> 
                  <p>Giờ chiếu: ${schedule.showtime}</p> 
              `;
                scheduleContainer.appendChild(scheduleDiv);
            });
        })
        .catch((error) => console.error("Error:", error));
}





