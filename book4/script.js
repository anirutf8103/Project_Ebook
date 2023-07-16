document.addEventListener("DOMContentLoaded", function () {
  const pageFlip = new St.PageFlip(document.getElementById("demoBookExample"), {
    width: 600, // base page width
    height: 450, // base page height

    size: "stretch",
    // set threshold values:
    minWidth: 315,
    maxWidth: 1000,
    minHeight: 420,
    maxHeight: 1350,

    maxShadowOpacity: 0.2, // Half shadow intensity
    showCover: true,
    mobileScrollSupport: false, // disable content scrolling on mobile devices

    controlsProps: {
      nextBtn: "#nextPageButton", // เลือกองค์ประกอบที่คุณต้องการเป็นปุ่มเปิดหน้าถัดไป
    },
  });

  // load pages
  pageFlip.loadFromHTML(document.querySelectorAll(".page"));

  document.querySelector(".page-total").innerText = pageFlip.getPageCount();

  document.querySelector(".btn-prev").addEventListener("click", () => {
    pageFlip.flipPrev(); // Turn to the previous page (with animation)
  });

  document.querySelector(".btn-next").addEventListener("click", () => {
    pageFlip.flipNext(); // Turn to the next page (with animation)
  });

  // triggered by page turning
  pageFlip.on("flip", (e) => {
    document.querySelector(".page-current").innerText = e.data + 1;
  });

  // triggered when the state of the book changes
  pageFlip.on("changeState", (e) => {
    document.querySelector(".page-state").innerText = e.data;
  });

  // triggered when page orientation changes
  pageFlip.on("changeOrientation", (e) => {
    document.querySelector(".page-orientation").innerText = e.data;
  });
});
