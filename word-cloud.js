var fill = d3.scale.category20b();

var w = 900,
    h = 200;

var max,
    fontSize;

var layout = d3.layout.cloud()
    .timeInterval(Infinity)
    .size([w, h])
    .fontSize(function (d) {
        return fontSize(+d.value);
    })
    .text(function (d) {
        return d.key;
    })
    .on("end", draw);

var svg = d3.select("#vis").append("svg")
    .attr("width", w)
    .attr("height", h);

var vis = svg.append("g").attr("transform", "translate(" + [w >> 1, h >> 1] + ")");
26
// update();

if (window.attachEvent) {
    window.attachEvent('onresize', update);
}
else if (window.addEventListener) {
    window.addEventListener('resize', update);
}

function draw(data, bounds) {
    var w = window.innerWidth,
        h = window.innerHeight;

    svg.attr("width", w).attr("height", h);

    scale = bounds ? Math.min(
        w / Math.abs(bounds[1].x - w / 2),
        w / Math.abs(bounds[0].x - w / 2),
        h / Math.abs(bounds[1].y - h / 2),
        h / Math.abs(bounds[0].y - h / 2)) / 2 : 1;

    var text = vis.selectAll("text")
        .data(data, function (d) {
            return d.text.toLowerCase();
        });
    text.transition()
        .duration(1000)
        .attr("transform", function (d) {
            return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
        })
        .style("font-size", function (d) {
            return d.size + "px";
        });
    text.enter().append("text")
        .attr("text-anchor", "middle")
        .attr("transform", function (d) {
            return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
        })
        .style("font-size", function (d) {
            return d.size + "px";
        })
        .style("opacity", 1e-6)
        .transition()
        .duration(1000)
        .style("opacity", 1);
    text.style("font-family", function (d) {
        return d.font;
    })
        .style("fill", function (d) {
            return fill(d.text.toLowerCase());
        })
        .text(function (d) {
            return d.text;
        });

    vis.transition().attr("transform", "translate(" + [w >> 1, h >> 1] + ")scale(" + scale + ")");
}

function update() {

    var tags;

    $.ajax({
        url: 'http://localhost:5000/keywordextraction',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify({"data": "තොරතුරු තාක්‍ෂණය දේශීයකරණය දැන්‌ සැම තැනම කතා කරන මාතෘකාවක්‌ වෙලා. පහුගිය කාලය තුළ Mozilla Firefox, ලිනක්‌ස්‌ මෙහෙයුම්‌ පද්‌ධති වගේම Microsoft Windows Vista සහ MS Office 2007 පැකේජයන්‌ පවා සිංහලට පැමිණීම මෙහිලා විශේෂ කොට දක්‌වන්‌න පුලුවන්‌. එමෙන්‌ම නුදුරු අනාගතයේදී තව තවත්‌ වටිනා මෘදුකාංග දේශීයකරණය වෙනු ඇති. ඉංග්‍රීසි මෘදුකාංග වලට සිංහල අතුරු මුහුණත්‌ (interface) සැකසීම දේශීයකරණයට ප්‍රමාණවත්‌ නොවේ, පරිශීලකයා අනුව ක්‍රියාකාරකම් හා පෙර ලැබූ පළපුරුද්ද එකතු කලයුතුය(පරිශීලන අත්දැකීම). අපගේ දැක්‌ම අනුව දේශීයකරණය දෙයාකාරයකින්‌ සිදුවිය යුතු යි. පළමුව දේශීය ඵලදායිතාව නැංවීම සඳහා අවශ්‍ය තොරතුරු තාක්‍ෂණය දැනුම ඉහල දැමිය යුතුය. ගොවිපලේ සිට කර්‌මාන්‌ත සහ කාර්‌යාලීය මට්‌ටම දක්‌වා තොරතුරු තාක්‍ෂණය භාවිතා කිරීමට ඇති හැකියාව වැඩි දියුණු කිරීම මේ යටතට වැටේ. භාෂාව මේ සඳහා විශාල බාධකයක්‌ විය හැකි බැවින්‌ දේශීයකරණයට සිදු කිරීමේදී ඒ ඒ අංශයන්‌ගෙන්‌ රටට සිදුව ඍජු සහ වක්‍ර බලපෑම්‌ අනුව ඒවාට ප්‍රමුඛතාවය ලබා දී ක්‍රියාත්‌මක කළ යුතුය. දෙවන කොටසට අයිති වනුයේ තොරතුරු තාක්‍ෂණය භාවිතා කිරීම සඳහා තාක්‍ෂණවේදීන්‌ සැකසීමේ කාර්‌යයයි. මේ සඳහා ක්‍රමවත්‌ අධ්‍යාපන ක්‍රමයක්‌ සැකසීම සහ ඒ සඳහා අවශ්‍ය පහසුකම්‌ ශිෂ්‍ය ශිෂ්‍යාවන්‌ට සහ දැනට එම ක්‍ෂේත්‍රෙය්‌ නියැලෙන අයට ලබාදීම අනිවාර්‌ය වේ. අ.පො.ස. සාමාන්‍ය පෙළ සහ උසස්‌ පෙළ සඳහා අතිරේක විෂයක්‌ ලෙස තොරතුරු තාක්‍ෂණය(ICT සහ GIT) හඳුන්‌වා දීම මෙහි ලා අගය කළ යුතු ක්‍රියාමාර්‌ගයකි. එසේම නව විෂය නිර්‌දේශය යටතේ උසස්‌ පෙළ ප්‍රධාන විෂයක්‌ ලෙස තොරතුරු තාක්‍ෂණය (IT) ඉගැන්‌වීමට ආරම්‌භ කිරීම වඩාත්‌ අගය කළ යුතුය. ඉතා වටිනා අගය කළයුතු විෂය නිර්‌දේශයකින්‌ එය සමන්‌විතය. අපගේ දැක්‌මට අනුව දැනට අරටුව ශක්‌තිමත්‌ව සැකසෙමින්‌ පවතී. අනෙකුත්‌ බාහිර කරුණු ද, එයට අවශ්‍ය කරන ශක්‌තිය ද ලබාදේ නම්‌ ත්‍රස්‌තවාදයෙන්‌ මිදුනු අපේ රටට අහිමිව ගිය ආර්‌ථික ස්‌ථානයද නැවත හිමිකරදීමට අනාගත පරපුරට හැකි වනු නොඅනුමානය."}),
        success: function (data) {
            tags = data;
            layout.font('impact').spiral('archimedean');
            fontSize = d3.scale['sqrt']().range([1, 100]);
            if (tags.length) {
                fontSize.domain([+tags[tags.length - 1].value || 1, +tags[0].value]);
            }
            layout.stop().words(tags).start();
        },
        error: function (jqXhr, textStatus, errorThrown) {
            alert("Mind map Request Failedd");
        }
    });

}
