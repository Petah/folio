namespace Cv {
    export class SkillChart {
        private node;
        private data = [];

        private svg: d3.Selection<any, any, any, any>;
        private barGroup: d3.Selection<any, any, any, any>;
        private x;
        private y;

        constructor(node, data) {
            this.data = data;

            this.node = document.querySelector(node);
            if (!this.node) {
                throw new Error('Could not find node ' + node);
            }

            this.svg = d3.select(node);
            this.barGroup = this.svg.select('.skill-chart-bars');

            this.x = d3.scaleLinear();
            this.y = d3.scaleBand();

            this.redraw();
        }

        private redraw() {
            this.svg.attr('height', this.data.length * 50);
            this.updateRanges();
            this.updateDomains();
            this.redrawBars();
        }

        private updateRanges() {
            this.x.range([0, 100]);
            this.y.range([0, this.data.length * 50]);
        }

        private updateDomains() {
            this.x.domain([0, 100]);

            var domain = this.data.map((d) => {
                return d.label;
            });
            this.y.domain(domain);
        }

        private redrawBars() {
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
                .attr('class', (d, i) => {
                    return [
                        'skill-chart-back',
                        'color-fill-' + i,
                    ].join(' ');
                })
                .attr('x', 0)
                .attr('y', (d: { label: string }) => {
                    return (this.y(d.label) + (this.y.bandwidth() / 2)) - 2;
                })
                .attr('width', (d: { level: number }) => {
                    return Math.max(1, this.x(d.level)) + '%';
                })
                .attr('height', this.y.bandwidth() / 2);

            this.barGroup.selectAll('.skill-chart-underline')
                .attr('x', 0)
                .attr('y', (d: { label: string }) => {
                    return (this.y(d.label) + (this.y.bandwidth() / 2) + this.y.bandwidth() / 2 - 5);
                })
                .attr('width', (d: { level: number }) => {
                    return Math.max(1, this.x(d.level)) + '%';
                })
                .attr('height', 3);

            this.barGroup.selectAll('.skill-chart-text')
                .attr('x', 0)
                .attr('y', (d: { label: string }) => {
                    return (this.y(d.label) + (this.y.bandwidth() / 2)) - 7;
                })
                .text((d: { label: string }) => {
                    return d.label;
                });
        }
    }
}
