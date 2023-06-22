var APP_DATA = {
  "scenes": [
    {
      "id": "0-entrada-principalinicio",
      "name": "Entrada principal(inicio)",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "yaw": 2.4404870995613503,
        "pitch": 0.22882478923197525,
        "fov": 1.3616874290001844
      },
      "linkHotspots": [
        {
          "yaw": 1.4888910921595047,
          "pitch": 0.13146141353570684,
          "rotation": 0,
          "target": "1-curva-bus"
        },
        {
          "yaw": -1.738601808275238,
          "pitch": 0.06362964677250282,
          "rotation": 0,
          "target": "13-entrada-sistemas"
        }
      ],
      "infoHotspots": [
        {
          "yaw": 2.3375165445364914,
          "pitch": -0.13845323706571477,
          "title": "Auditorium",
          "text": "Curva"
        }
      ]
    },
    {
      "id": "1-curva-bus",
      "name": "Curva bus",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -0.15953540081059003,
          "pitch": 0.10237169314067529,
          "rotation": 0,
          "target": "0-entrada-principalinicio"
        },
        {
          "yaw": -2.5173293705224786,
          "pitch": 0.12508589943110593,
          "rotation": 0,
          "target": "2-entrada-obras-1"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "2-entrada-obras-1",
      "name": "Entrada obras 1",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -0.18476900094934656,
          "pitch": 0.10088965609534739,
          "rotation": 0,
          "target": "1-curva-bus"
        },
        {
          "yaw": -2.5699003579180264,
          "pitch": 0.05222530441937323,
          "rotation": 0,
          "target": "3-entrada-obras-2"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "3-entrada-obras-2",
      "name": "Entrada obras 2",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 2.0635078709097368,
          "pitch": 0.11977799864613914,
          "rotation": 0,
          "target": "2-entrada-obras-1"
        },
        {
          "yaw": -0.38103282183601905,
          "pitch": 0.10082990049039608,
          "rotation": 0,
          "target": "4-estacionamiento-rector"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "4-estacionamiento-rector",
      "name": "Estacionamiento rector",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 0.7161721106313763,
          "pitch": 0.13795898093487935,
          "rotation": 0,
          "target": "3-entrada-obras-2"
        },
        {
          "yaw": -1.7491436068048891,
          "pitch": 0.08115834837276736,
          "rotation": 0,
          "target": "5-estacionamiento-ad-1"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "5-estacionamiento-ad-1",
      "name": "Estacionamiento ad 1",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 1.1894928632362145,
          "pitch": 0.09407742741930747,
          "rotation": 0,
          "target": "4-estacionamiento-rector"
        },
        {
          "yaw": -2.386531884901526,
          "pitch": 0.21958026544747256,
          "rotation": 0.7853981633974483,
          "target": "6-estacionamiento-ad-2"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "6-estacionamiento-ad-2",
      "name": "Estacionamiento ad 2",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.974042497469517,
          "pitch": 0.30907899273642414,
          "rotation": 12.566370614359176,
          "target": "5-estacionamiento-ad-1"
        },
        {
          "yaw": 0.693165820937157,
          "pitch": 0.16833561104968453,
          "rotation": 0.7853981633974483,
          "target": "7-poli-estacionamiento-1"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "7-poli-estacionamiento-1",
      "name": "Poli estacionamiento 1",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 1.6150419870918604,
          "pitch": 0.1660799643687607,
          "rotation": 5.497787143782138,
          "target": "6-estacionamiento-ad-2"
        },
        {
          "yaw": 0.017737184159555497,
          "pitch": 0.1032596948343194,
          "rotation": 0,
          "target": "8-poli-estacionamiento--2"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "8-poli-estacionamiento--2",
      "name": "Poli estacionamiento  2",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "yaw": 0.7621210670345473,
        "pitch": 0.14519280771523668,
        "fov": 1.3616874290001844
      },
      "linkHotspots": [
        {
          "yaw": 3.0826638775251904,
          "pitch": 0.058198103426120085,
          "rotation": 0,
          "target": "7-poli-estacionamiento-1"
        },
        {
          "yaw": 0.6982030469992289,
          "pitch": 0.30235610208195673,
          "rotation": 0,
          "target": "9-entrada-enfermeria"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "9-entrada-enfermeria",
      "name": "Entrada enfermeria",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.7913370323723417,
          "pitch": 0.2710625233673234,
          "rotation": 5.497787143782138,
          "target": "8-poli-estacionamiento--2"
        },
        {
          "yaw": -1.0129168513977458,
          "pitch": 0.24656352662332992,
          "rotation": 0,
          "target": "14-entrada-pabellon-a"
        },
        {
          "yaw": 1.2417993711814805,
          "pitch": 0.15881277060164223,
          "rotation": 0,
          "target": "10-centro-medico"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "10-centro-medico",
      "name": "Centro medico",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 2.313575765114434,
          "pitch": 0.25056632036565674,
          "rotation": 0,
          "target": "9-entrada-enfermeria"
        },
        {
          "yaw": -0.5484776059325291,
          "pitch": 0.46347740380240765,
          "rotation": 5.497787143782138,
          "target": "11-entrada-poli"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "11-entrada-poli",
      "name": "Entrada poli",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -0.050357584654483034,
          "pitch": 0.14769704542885265,
          "rotation": 0,
          "target": "12-comedor"
        },
        {
          "yaw": -2.6095922211247853,
          "pitch": 0.3188198829371096,
          "rotation": 0,
          "target": "10-centro-medico"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "12-comedor",
      "name": "Comedor",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 1.5271867488842616,
          "pitch": 0.19681746191294813,
          "rotation": 0,
          "target": "11-entrada-poli"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "13-entrada-sistemas",
      "name": "Entrada sistemas",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.7390756511797623,
          "pitch": 0.08859800338111867,
          "rotation": 0,
          "target": "0-entrada-principalinicio"
        },
        {
          "yaw": -0.31193466262108416,
          "pitch": 0.07757867948974351,
          "rotation": 0,
          "target": "14-entrada-pabellon-a"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "14-entrada-pabellon-a",
      "name": "Entrada pabellon A",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": 1.1994326013396357,
          "pitch": 0.08474213589729551,
          "rotation": 0,
          "target": "13-entrada-sistemas"
        },
        {
          "yaw": -1.1373287826387433,
          "pitch": 0.12513616651655823,
          "rotation": 0,
          "target": "15-espacio-feria"
        },
        {
          "yaw": -2.7880235379595995,
          "pitch": 0.13842855638041307,
          "rotation": 5.497787143782138,
          "target": "9-entrada-enfermeria"
        }
      ],
      "infoHotspots": []
    },
    {
      "id": "15-espacio-feria",
      "name": "Espacio feria",
      "levels": [
        {
          "tileSize": 256,
          "size": 256,
          "fallbackOnly": true
        },
        {
          "tileSize": 512,
          "size": 512
        },
        {
          "tileSize": 512,
          "size": 1024
        },
        {
          "tileSize": 512,
          "size": 2048
        },
        {
          "tileSize": 512,
          "size": 4096
        }
      ],
      "faceSize": 3600,
      "initialViewParameters": {
        "pitch": 0,
        "yaw": 0,
        "fov": 1.5707963267948966
      },
      "linkHotspots": [
        {
          "yaw": -2.964231484175807,
          "pitch": 0.15408055570471113,
          "rotation": 0,
          "target": "14-entrada-pabellon-a"
        }
      ],
      "infoHotspots": []
    }
  ],
  "name": "Recorrido Virtual UNAMAD",
  "settings": {
    "mouseViewMode": "drag",
    "autorotateEnabled": true,
    "fullscreenButton": true,
    "viewControlButtons": true
  }
};
