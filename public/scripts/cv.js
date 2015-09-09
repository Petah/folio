var Cv;
(function (Cv) {
    var SkillChart = (function () {
        function SkillChart(node, data) {
            this.data = [];
            this.data = data;
            this.node = document.querySelector(node);
            if (!this.node) {
                throw new Error('Could not find node ' + node);
            }
            this.svg = d3.select(node);
            this.barGroup = this.svg.select('.skill-chart-bars');
            this.x = d3.scale.linear();
            this.y = d3.scale.ordinal();
            this.redraw();
        }
        SkillChart.prototype.redraw = function () {
            this.svg.attr('height', this.data.length * 50);
            this.updateRanges();
            this.updateDomains();
            this.redrawBars();
        };
        SkillChart.prototype.updateRanges = function () {
            this.x.range([0, 100]);
            console.log([0, this.node]);
            this.y.rangeBands([0, this.data.length * 50], 0, 0);
        };
        SkillChart.prototype.updateDomains = function () {
            this.x.domain([0, 100]);
            var domain = this.data.map(function (d) {
                return d.label;
            });
            this.y.domain(domain);
        };
        SkillChart.prototype.redrawBars = function () {
            var _this = this;
            // Data join
            var bars = this.barGroup.selectAll('.skill-chart-bar')
                .data(this.data);
            // Enter
            var bar = bars.enter()
                .append('g')
                .attr('class', 'skill-chart-bar');
            bar.append('rect')
                .attr('class', 'skill-chart-back');
            bar.append('rect')
                .attr('class', 'skill-chart-underline');
            bar.append('text')
                .attr('class', 'skill-chart-text');
            // Exit
            bars.exit().remove();
            // Update
            this.barGroup.selectAll('.skill-chart-back')
                .attr('class', function (d, i) {
                return [
                    'skill-chart-back',
                    'color-fill-' + i,
                ].join(' ');
            })
                .attr('x', 0)
                .attr('y', function (d) {
                return (_this.y(d.label) + (_this.y.rangeBand() / 2)) - 2;
            })
                .attr('width', function (d) {
                return Math.max(1, _this.x(d.level)) + '%';
            })
                .attr('height', this.y.rangeBand() / 2);
            this.barGroup.selectAll('.skill-chart-underline')
                .attr('x', 0)
                .attr('y', function (d) {
                return (_this.y(d.label) + (_this.y.rangeBand() / 2) + _this.y.rangeBand() / 2 - 5);
            })
                .attr('width', function (d) {
                return Math.max(1, _this.x(d.level)) + '%';
            })
                .attr('height', 3);
            this.barGroup.selectAll('.skill-chart-text')
                .attr('x', 0)
                .attr('y', function (d) {
                return (_this.y(d.label) + (_this.y.rangeBand() / 2)) - 7;
            })
                .text(function (d) {
                return d.label;
            });
        };
        return SkillChart;
    })();
    Cv.SkillChart = SkillChart;
})(Cv || (Cv = {}));
//# sourceMappingURL=cv.js.map