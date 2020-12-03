function downloadCSV(csv, filename) {
  var csvFile;
  var downloadLink;
  csvFile = new Blob([csv], {type: "text/csv"});
  downloadLink = document.createElement("a");
  downloadLink.download = filename;
  downloadLink.href = window.URL.createObjectURL(csvFile);
  downloadLink.style.display = "none";
  document.body.appendChild(downloadLink);
  downloadLink.click();
}

function exportTableToCSV(filename) {
  var csv = [];
  var rows = document.querySelectorAll("table .exportable");
  
  for (var i = 0; i < rows.length; i++) {
    var row = [], cols = rows[i].querySelectorAll("td, th");
    for (var j = 0; j < cols.length; j++) {
      let columnValue = cols[j].innerText

      if (columnValue === "Controls" || columnValue === "Delete" || columnValue === '') {
          continue;
      } else {
          row.push(cols[j].innerText);
      }
    }
    csv.push(row.join(","));        
  }
  downloadCSV(csv.join("\n"), filename);
}

function toggleSelected(e) {
  e.classList.toggle("exportable");
}

let exButtons = document.querySelectorAll('.ex');

for (let i = 0; i < exButtons.length; i++) {
  exButtons[i].addEventListener('click', () => {
    toggleSelected(event.target.parentNode.parentNode);
  }, false);
}
