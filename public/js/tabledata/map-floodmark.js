
const pin_red = L.icon({
    iconUrl: '../images/icon/flood_red.png',
    iconRetinaUrl: '../images/icon/flood_red.png',
    iconSize: [30, 35],
    iconAnchor: [25, 0],
    popupAnchor: [-10, 0]
});
const pin_orange = L.icon({
    iconUrl: '../images/icon/flood_orange.png',
    iconRetinaUrl: '../images/icon/flood_orange.png',
    iconSize: [30, 35],
    iconAnchor: [25, 0],
    popupAnchor: [-10, 0]
});
const pin_yellow = L.icon({
    iconUrl: '../images/icon/flood_yellow.png',
    iconRetinaUrl: '../images/icon/flood_yellow.png',
    iconSize: [30, 35],
    iconAnchor: [25, 0],
    popupAnchor: [-10, 0]
});
const pin_green = L.icon({
    iconUrl: '../images/icon/flood_green.png',
    iconRetinaUrl: '../images/icon/flood_green.png',
    iconSize: [30, 35],
    iconAnchor: [25, 0],
    popupAnchor: [-10, 0]
});

const pin_purple = L.icon({
    iconUrl: '../images/icon/flood_purple.png',
    iconRetinaUrl: '../images/icon/flood_purple.png',
    iconSize: [30, 35],
    iconAnchor: [25, 0],
    popupAnchor: [-10, 0]
});


const pinMO_red = L.icon({
    iconUrl: '../images/icon/flood_red.png',
    iconRetinaUrl: '../images/icon/flood_red.png',
    iconSize: [15, 20],
    iconAnchor: [5, 30],
    popupAnchor: [0, 0]
});
const pinMO_orange = L.icon({
    iconUrl: '../images/icon/flood_orange.png',
    iconRetinaUrl: '../images/icon/flood_orange.png',
    iconSize: [15, 20],
    iconAnchor: [5, 30],
    popupAnchor: [0, 0]
});
const pinMO_yellow = L.icon({
    iconUrl: '../images/icon/flood_yellow.png',
    iconRetinaUrl: '../images/icon/flood_yellow.png',
    iconSize: [15, 20],
    iconAnchor: [5, 30],
    popupAnchor: [0, 0]
});
const pinMO_green = L.icon({
    iconUrl: '../images/icon/flood_green.png',
    iconRetinaUrl: '../images/icon/flood_green.png',
    iconSize: [15, 20],
    iconAnchor: [5, 30],
    popupAnchor: [0, 0]
});
const pinMO_purple = L.icon({
    iconUrl: '../images/icon/flood_purple.png',
    iconRetinaUrl: '../images/icon/flood_purple.png',
    iconSize: [15, 20],
    iconAnchor: [5, 30],
    popupAnchor: [0, 0]
});

const station1 = new L.LayerGroup();
const station2 = new L.LayerGroup();
const station3 = new L.LayerGroup();
const station4 = new L.LayerGroup();
const station5 = new L.LayerGroup();
const cnx = new L.LayerGroup();
const lpn = new L.LayerGroup();

const stationLayers = {
    1: station1, 2: station2, 3: station3, 4: station4, 5: station5
};


const icon_pin = [pin_green, pin_green, pin_yellow, pin_orange, pin_red, pin_purple];
const icon_pinMO = [pinMO_green, pinMO_green, pinMO_yellow, pinMO_orange, pinMO_red, pinMO_purple];

omnivore.kml('../kml/CNX.kml').on('ready', function () {
    this.setStyle({ fillOpacity: 0.5, color: "#3d98ff", weight: 0 });
}).addTo(cnx);

omnivore.kml('../kml/LPN.kml').on('ready', function () {
    this.setStyle({ fillOpacity: 0.5, color: "#3d98ff", weight: 0 });
}).addTo(lpn);
$(function () {
    // ✅ สร้างแผนที่
    const mbAttr = 'Chiang Mai ',
        mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoidmFucGFueWEiLCJhIjoiY2loZWl5ZnJ4MGxnNHRwbHp5bmY4ZnNxOCJ9.IooQB0jYS_4QZvIq7gkjeQ';
    osm = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20, subdomains: ['mt0', 'mt1', 'mt2', 'mt3'], attribution: mbAttr
    });
    osmBw = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
        maxZoom: 20, subdomains: ['mt0', 'mt1', 'mt2', 'mt3'], attribution: mbAttr
    });

    const map = L.map("map", {
        layers: [osm, station1, station2, station3, station4, station5, cnx, lpn],
        center: [18.787563, 99.003968],
        zoom: 13
    });

    // ✅ เรียกโหลดข้อมูล
    let mo = window.matchMedia("(max-width: 450px)").matches ? 0 : 1;
    loadAllData(mo);


    const baseTree = {
        label: 'BaseLayers',
        noShow: true,
        children: [{ label: ' แผนที่ภูมิประเทศ (Streets)', layer: osm },
        { label: ' แผนที่ภาพถ่ายผ่านดาวเทียม (Satellite)', layer: osmBw },
        ]
    };
    const ctl = L.control.layers.tree(baseTree, null);
    ctl.addTo(map).collapseTree().expandSelected();

    const overlays = [
        {
            label: ' ช่วงความสูงระดับน้ำท่วม',
            selectAllCheckbox: true,
            children: [
                { label: " 0 - 50 ซม.", layer: station4 },
                { label: " 50 - 100 ซม.", layer: station3 },
                { label: " 100 - 150 ซม.", layer: station2 },
                { label: " 150 - 200 ซม.", layer: station1 },
                { label: " > 200 ซม.", layer: station5 },
            ]
        },
        {
            label: ' พื้นที่น้ำท่วม (ต.ค. 2567',
            selectAllCheckbox: true,
            children: [
                { label: " จ.เชียงใหม่", layer: cnx },
                { label: " จ.ลำพูน", layer: lpn }

            ]
        }
    ];

    // ใส่ overlay ทั้งหมดในครั้งเดียว
    ctl.setOverlayTree(overlays).collapseTree(true).expandSelected(true);
});

// ✅ ฟังก์ชัน popup
function buildPopup(item, x, y) {
    return `
      <div class='leaflet-popup-content'>
        <font style="font-family: 'Mitr';" size="3" color="#1AA90A"> หมายเลขหลัก : ${item.code}</font><br>
        <font style="font-family: 'Mitr';" size="2" color="#466DF3"> บริเวณที่ตั้ง : ${item.place_detail}</font><br>
        <font style="font-family: 'Mitr';" size="2" color="#466DF3"> ระดับน้ำท่วม : ${item.water_level} เซนติเมตร</font><br>
        <font style="font-family: 'Mitr';" size="2" color="#466DF3"> โครงสร้างที่ทำเครื่องหมาย : ${checkname(item.tool)} ${checkname(item.tool_detail)}</font><br><br>
        <table align="center">
          <tr>
            <td>
              <a href="/flood24/image/${item.code}" target="_blank">
                <button class="btn btn-primary btn-sm waves-effect waves-light">
                  <i class="feather icon-image"></i> ภาพประกอบ
                </button>
              </a>
            </td>
            <td>
              <a href="https://maps.google.com/?q=${x},${y}" target="_blank">
                <button class="btn btn-primary btn-sm waves-effect waves-light">
                  <i class="feather icon-map-pin"></i> ขอเส้นทาง
                </button>
              </a>
            </td>
          </tr>
        </table>
      </div>`;
}

// ✅ ฟังก์ชันเพิ่ม marker ลง layer
function renderMarkersToLayer(data, layerGroup, iconSet, index) {
    data.forEach(item => {
        const x = item.latitude;
        const y = item.longitude;
        const popupText = buildPopup(item, x, y);
        const icon = iconSet[index % iconSet.length];
        const marker = L.marker([x, y], { icon: icon }).bindPopup(popupText);
        layerGroup.addLayer(marker);
    });
}

// ✅ โหลดข้อมูลแต่ละ level
function loadAllData(mo = 1) {
    const iconSet = mo === 0 ? icon_pinMO : icon_pin;

    for (let level = 1; level <= 5; level++) {
        const layer = stationLayers[level];
        // const url = `/flood24/getDataSurveyLevel/${level}`; // อย่าใช้ {{ }} ถ้าอยู่นอก Blade
        const url = `/flood24/getDataSurveyLevel/${level}`;

        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                renderMarkersToLayer(data, layer, iconSet, level);
            },
            error: function (xhr, status, error) {
                console.error(`Error loading data for level ${level}:`, error);
            }
        });
    }
}

function checkname(name) {
    if (name != null) {
        return name;
    } else {
        return " ";
    }
}