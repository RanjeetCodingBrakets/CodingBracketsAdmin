<style>
	@charset "UTF-8";

:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #6493fa;
  --white: #ffffff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #9e6de0;
  --secondary: #fd5190;
  --success: #0acb8e;
  --info: #04c7e0;
  --warning: #fec400;
  --danger: #fe5461;
  --light: #f0f1f5;
  --dark: #31343d;
  --info-dark: #6493fa;
  --smoke: #8a909d;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --breakpoint-xxl: 1500px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: "Karla", sans-serif;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #8a909d;
  text-align: left;
  background-color: #f0f1f5;
}

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: #9e6de0;
  text-decoration: none;
  background-color: transparent;
}
a:hover {
  color: #742ed3;
  text-decoration: underline;
}

a:not([href]):not([class]) {
  color: inherit;
  text-decoration: none;
}
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type=radio],
input[type=checkbox] {
  box-sizing: border-box;
  padding: 0;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
  height: auto;
}

[type=search] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type=search]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0;
  font-weight: 500;
  line-height: 1.2;
  color: #31343d;
}

h1, .h1 {
  font-size: 2.34375rem;
}

h2, .h2 {
  font-size: 1.875rem;
}

h3, .h3 {
  font-size: 1.640625rem;
}

h4, .h4 {
  font-size: 1.40625rem;
}

h5, .h5 {
  font-size: 1.171875rem;
}

h6, .h6 {
  font-size: 1.003125rem;
}

.lead {
  font-size: 1.171875rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 2rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 0.875em;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.171875rem;
}

.blockquote-footer {
  display: block;
  font-size: 0.875em;
  color: #6c757d;
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #f0f1f5;
  border: 1px solid #b6bdca;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code {
  font-size: 100%;
  color: #9e6de0;
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 100%;
  color: #ffffff;
  background-color: #2f2f2f;
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 100%;
  color: #2f2f2f;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container,
.container-fluid,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}
.no-gutters > .col,
.no-gutters > [class*=col-] {
  padding-right: 0;
  padding-left: 0;
}

.col-xxl,
.col-xxl-auto, .col-xxl-12, .col-xxl-11, .col-xxl-10, .col-xxl-9, .col-xxl-8, .col-xxl-7, .col-xxl-6, .col-xxl-5, .col-xxl-4, .col-xxl-3, .col-xxl-2, .col-xxl-1, .col-xl,
.col-xl-auto, .col-xl-12, .col-xl-11, .col-xl-10, .col-xl-9, .col-xl-8, .col-xl-7, .col-xl-6, .col-xl-5, .col-xl-4, .col-xl-3, .col-xl-2, .col-xl-1, .col-lg,
.col-lg-auto, .col-lg-12, .col-lg-11, .col-lg-10, .col-lg-9, .col-lg-8, .col-lg-7, .col-lg-6, .col-lg-5, .col-lg-4, .col-lg-3, .col-lg-2, .col-lg-1, .col-md,
.col-md-auto, .col-md-12, .col-md-11, .col-md-10, .col-md-9, .col-md-8, .col-md-7, .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2, .col-md-1, .col-sm,
.col-sm-auto, .col-sm-12, .col-sm-11, .col-sm-10, .col-sm-9, .col-sm-8, .col-sm-7, .col-sm-6, .col-sm-5, .col-sm-4, .col-sm-3, .col-sm-2, .col-sm-1, .col,
.col-auto, .col-12, .col-11, .col-10, .col-9, .col-8, .col-7, .col-6, .col-5, .col-4, .col-3, .col-2, .col-1 {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}

.row-cols-1 > * {
  flex: 0 0 100%;
  max-width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 50%;
  max-width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 33.3333333333%;
  max-width: 33.3333333333%;
}

.row-cols-4 > * {
  flex: 0 0 25%;
  max-width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 20%;
  max-width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 16.6666666667%;
  max-width: 16.6666666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}

.col-1 {
  flex: 0 0 8.33333333%;
  max-width: 8.33333333%;
}

.col-2 {
  flex: 0 0 16.66666667%;
  max-width: 16.66666667%;
}

.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  flex: 0 0 33.33333333%;
  max-width: 33.33333333%;
}

.col-5 {
  flex: 0 0 41.66666667%;
  max-width: 41.66666667%;
}

.col-6 {
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  flex: 0 0 58.33333333%;
  max-width: 58.33333333%;
}

.col-8 {
  flex: 0 0 66.66666667%;
  max-width: 66.66666667%;
}

.col-9 {
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  flex: 0 0 83.33333333%;
  max-width: 83.33333333%;
}

.col-11 {
  flex: 0 0 91.66666667%;
  max-width: 91.66666667%;
}

.col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  order: -1;
}

.order-last {
  order: 13;
}

.order-0 {
  order: 0;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-6 {
  order: 6;
}

.order-7 {
  order: 7;
}

.order-8 {
  order: 8;
}

.order-9 {
  order: 9;
}

.order-10 {
  order: 10;
}

.order-11 {
  order: 11;
}

.order-12 {
  order: 12;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    order: -1;
  }
  .order-sm-last {
    order: 13;
  }
  .order-sm-0 {
    order: 0;
  }
  .order-sm-1 {
    order: 1;
  }
  .order-sm-2 {
    order: 2;
  }
  .order-sm-3 {
    order: 3;
  }
  .order-sm-4 {
    order: 4;
  }
  .order-sm-5 {
    order: 5;
  }
  .order-sm-6 {
    order: 6;
  }
  .order-sm-7 {
    order: 7;
  }
  .order-sm-8 {
    order: 8;
  }
  .order-sm-9 {
    order: 9;
  }
  .order-sm-10 {
    order: 10;
  }
  .order-sm-11 {
    order: 11;
  }
  .order-sm-12 {
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-md-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-md-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    order: -1;
  }
  .order-md-last {
    order: 13;
  }
  .order-md-0 {
    order: 0;
  }
  .order-md-1 {
    order: 1;
  }
  .order-md-2 {
    order: 2;
  }
  .order-md-3 {
    order: 3;
  }
  .order-md-4 {
    order: 4;
  }
  .order-md-5 {
    order: 5;
  }
  .order-md-6 {
    order: 6;
  }
  .order-md-7 {
    order: 7;
  }
  .order-md-8 {
    order: 8;
  }
  .order-md-9 {
    order: 9;
  }
  .order-md-10 {
    order: 10;
  }
  .order-md-11 {
    order: 11;
  }
  .order-md-12 {
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-lg-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    order: -1;
  }
  .order-lg-last {
    order: 13;
  }
  .order-lg-0 {
    order: 0;
  }
  .order-lg-1 {
    order: 1;
  }
  .order-lg-2 {
    order: 2;
  }
  .order-lg-3 {
    order: 3;
  }
  .order-lg-4 {
    order: 4;
  }
  .order-lg-5 {
    order: 5;
  }
  .order-lg-6 {
    order: 6;
  }
  .order-lg-7 {
    order: 7;
  }
  .order-lg-8 {
    order: 8;
  }
  .order-lg-9 {
    order: 9;
  }
  .order-lg-10 {
    order: 10;
  }
  .order-lg-11 {
    order: 11;
  }
  .order-lg-12 {
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xl-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    order: -1;
  }
  .order-xl-last {
    order: 13;
  }
  .order-xl-0 {
    order: 0;
  }
  .order-xl-1 {
    order: 1;
  }
  .order-xl-2 {
    order: 2;
  }
  .order-xl-3 {
    order: 3;
  }
  .order-xl-4 {
    order: 4;
  }
  .order-xl-5 {
    order: 5;
  }
  .order-xl-6 {
    order: 6;
  }
  .order-xl-7 {
    order: 7;
  }
  .order-xl-8 {
    order: 8;
  }
  .order-xl-9 {
    order: 9;
  }
  .order-xl-10 {
    order: 10;
  }
  .order-xl-11 {
    order: 11;
  }
  .order-xl-12 {
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
}
@media (min-width: 1500px) {
  .col-xxl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-xxl-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-xxl-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-xxl-3 > * {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .row-cols-xxl-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-xxl-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-xxl-6 > * {
    flex: 0 0 16.6666666667%;
    max-width: 16.6666666667%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xxl-1 {
    flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xxl-first {
    order: -1;
  }
  .order-xxl-last {
    order: 13;
  }
  .order-xxl-0 {
    order: 0;
  }
  .order-xxl-1 {
    order: 1;
  }
  .order-xxl-2 {
    order: 2;
  }
  .order-xxl-3 {
    order: 3;
  }
  .order-xxl-4 {
    order: 4;
  }
  .order-xxl-5 {
    order: 5;
  }
  .order-xxl-6 {
    order: 6;
  }
  .order-xxl-7 {
    order: 7;
  }
  .order-xxl-8 {
    order: 8;
  }
  .order-xxl-9 {
    order: 9;
  }
  .order-xxl-10 {
    order: 10;
  }
  .order-xxl-11 {
    order: 11;
  }
  .order-xxl-12 {
    order: 12;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #8a909d;
}
.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #e5e9f2;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #e5e9f2;
}
.table tbody + tbody {
  border-top: 2px solid #e5e9f2;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #e5e9f2;
}
.table-bordered th,
.table-bordered td {
  border: 1px solid #e5e9f2;
}
.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  color: #8a909d;
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #e4d6f6;
}
.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #cdb3ef;
}

.table-hover .table-primary:hover {
  background-color: #d6c1f1;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #d6c1f1;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #fecee0;
}
.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #fea5c5;
}

.table-hover .table-secondary:hover {
  background-color: #fdb5d0;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #fdb5d0;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #baf0df;
}
.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #80e4c4;
}

.table-hover .table-success:hover {
  background-color: #a5ebd5;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #a5ebd5;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #b9eff6;
}
.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #7ce2ef;
}

.table-hover .table-info:hover {
  background-color: #a2eaf3;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #a2eaf3;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeb8;
}
.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #fee07a;
}

.table-hover .table-warning:hover {
  background-color: #ffe89f;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe89f;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #ffcfd3;
}
.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #fea6ad;
}

.table-hover .table-danger:hover {
  background-color: #ffb6bc;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #ffb6bc;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fbfbfc;
}
.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #f7f8fa;
}

.table-hover .table-light:hover {
  background-color: #ececf1;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf1;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c5c6c9;
}
.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #94959a;
}

.table-hover .table-dark:hover {
  background-color: #b8b9bd;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b8b9bd;
}

.table-info-dark,
.table-info-dark > th,
.table-info-dark > td {
  background-color: #d4e1fe;
}
.table-info-dark th,
.table-info-dark td,
.table-info-dark thead th,
.table-info-dark tbody + tbody {
  border-color: #aec7fc;
}

.table-hover .table-info-dark:hover {
  background-color: #bbd0fd;
}
.table-hover .table-info-dark:hover > td,
.table-hover .table-info-dark:hover > th {
  background-color: #bbd0fd;
}

.table-smoke,
.table-smoke > th,
.table-smoke > td {
  background-color: #dee0e4;
}
.table-smoke th,
.table-smoke td,
.table-smoke thead th,
.table-smoke tbody + tbody {
  border-color: #c2c5cc;
}

.table-hover .table-smoke:hover {
  background-color: #d0d3d9;
}
.table-hover .table-smoke:hover > td,
.table-hover .table-smoke:hover > th {
  background-color: #d0d3d9;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #ffffff;
  background-color: #343a40;
  border-color: #454d55;
}
.table .thead-light th {
  color: #495057;
  background-color: #f0f1f5;
  border-color: #e5e9f2;
}

.table-dark {
  color: #ffffff;
  background-color: #343a40;
}
.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}
.table-dark.table-bordered {
  border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
  color: #ffffff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}
@media (max-width: 1499.98px) {
  .table-responsive-xxl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xxl > .table-bordered {
    border: 0;
  }
}
.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 1.12rem + 2px);
  padding: 0.56rem 1rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #e5e9f2;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control:focus {
  color: #495057;
  background-color: #ffffff;
  border-color: #e4d6f6;
  outline: 0;
  box-shadow: 0 0 0 0.2rem transparent;
}
.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}
.form-control:disabled, .form-control[readonly] {
  background-color: #f0f1f5;
  opacity: 1;
}

input[type=date].form-control,
input[type=time].form-control,
input[type=datetime-local].form-control,
input[type=month].form-control {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

select.form-control:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}
select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #ffffff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.56rem + 1px);
  padding-bottom: calc(0.56rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.65rem + 1px);
  padding-bottom: calc(0.65rem + 1px);
  font-size: 1.171875rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.125rem + 1px);
  padding-bottom: calc(0.125rem + 1px);
  font-size: 0.75rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.56rem 0;
  margin-bottom: 0;
  font-size: 0.9375rem;
  line-height: 1.5;
  color: #8a909d;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.25rem + 2px);
  padding: 0.125rem 0.625rem;
  font-size: 0.75rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1.3rem + 2px);
  padding: 0.65rem 1.5rem;
  font-size: 1.171875rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}
.form-row > .col,
.form-row > [class*=col-] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}
.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #0acb8e;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.75rem;
  line-height: 1.5;
  color: #ffffff;
  background-color: rgba(10, 203, 142, 0.9);
  border-radius: 0.25rem;
}
.form-row > .col > .valid-tooltip, .form-row > [class*=col-] > .valid-tooltip {
  left: 5px;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #0acb8e;
  padding-right: calc(1.5em + 1.12rem) !important;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%230acb8e' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.28rem) center;
  background-size: calc(0.75em + 0.56rem) calc(0.75em + 0.56rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #0acb8e;
  box-shadow: 0 0 0 0.2rem rgba(10, 203, 142, 0.25);
}

.was-validated select.form-control:valid, select.form-control.is-valid {
  padding-right: 4rem !important;
  background-position: right 2rem center;
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 1.12rem);
  background-position: top calc(0.375em + 0.28rem) right calc(0.375em + 0.28rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #0acb8e;
  padding-right: calc(0.75em + 2.84rem) !important;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 1rem center/8px 10px no-repeat, #ffffff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%230acb8e' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 2rem/calc(0.75em + 0.56rem) calc(0.75em + 0.56rem) no-repeat;
}
.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #0acb8e;
  box-shadow: 0 0 0 0.2rem rgba(10, 203, 142, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #0acb8e;
}
.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #0acb8e;
}
.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #0acb8e;
}
.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #15f3ad;
  background-color: #15f3ad;
}
.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(10, 203, 142, 0.25);
}
.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #0acb8e;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #0acb8e;
}
.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #0acb8e;
  box-shadow: 0 0 0 0.2rem rgba(10, 203, 142, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #fe5461;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.75rem;
  line-height: 1.5;
  color: #ffffff;
  background-color: rgba(254, 84, 97, 0.9);
  border-radius: 0.25rem;
}
.form-row > .col > .invalid-tooltip, .form-row > [class*=col-] > .invalid-tooltip {
  left: 5px;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #fe5461;
  padding-right: calc(1.5em + 1.12rem) !important;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fe5461' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fe5461' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.28rem) center;
  background-size: calc(0.75em + 0.56rem) calc(0.75em + 0.56rem);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #fe5461;
  box-shadow: 0 0 0 0.2rem rgba(254, 84, 97, 0.25);
}

.was-validated select.form-control:invalid, select.form-control.is-invalid {
  padding-right: 4rem !important;
  background-position: right 2rem center;
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 1.12rem);
  background-position: top calc(0.375em + 0.28rem) right calc(0.375em + 0.28rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #fe5461;
  padding-right: calc(0.75em + 2.84rem) !important;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 1rem center/8px 10px no-repeat, #ffffff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fe5461' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fe5461' stroke='none'/%3e%3c/svg%3e") center right 2rem/calc(0.75em + 0.56rem) calc(0.75em + 0.56rem) no-repeat;
}
.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #fe5461;
  box-shadow: 0 0 0 0.2rem rgba(254, 84, 97, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #fe5461;
}
.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #fe5461;
}
.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #fe5461;
}
.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #fe8790;
  background-color: #fe8790;
}
.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(254, 84, 97, 0.25);
}
.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #fe5461;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #fe5461;
}
.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #fe5461;
  box-shadow: 0 0 0 0.2rem rgba(254, 84, 97, 0.25);
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}
.form-inline .form-check {
  width: 100%;
}
@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #8a909d;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.56rem 1.5rem;
  font-size: 0.9375rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: #8a909d;
  text-decoration: none;
}
.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem transparent;
}
.btn.disabled, .btn:disabled {
  opacity: 0.65;
}
.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}
a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #ffffff;
  background-color: #9e6de0;
  border-color: #9e6de0;
}
.btn-primary:hover {
  color: #ffffff;
  background-color: #894dd9;
  border-color: #8243d7;
}
.btn-primary:focus, .btn-primary.focus {
  color: #ffffff;
  background-color: #894dd9;
  border-color: #8243d7;
  box-shadow: 0 0 0 0.2rem rgba(173, 131, 229, 0.5);
}
.btn-primary.disabled, .btn-primary:disabled {
  color: #ffffff;
  background-color: #9e6de0;
  border-color: #9e6de0;
}
.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #8243d7;
  border-color: #7b38d5;
}
.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(173, 131, 229, 0.5);
}

.btn-secondary {
  color: #ffffff;
  background-color: #fd5190;
  border-color: #fd5190;
}
.btn-secondary:hover {
  color: #ffffff;
  background-color: #fd2b78;
  border-color: #fc1f70;
}
.btn-secondary:focus, .btn-secondary.focus {
  color: #ffffff;
  background-color: #fd2b78;
  border-color: #fc1f70;
  box-shadow: 0 0 0 0.2rem rgba(253, 107, 161, 0.5);
}
.btn-secondary.disabled, .btn-secondary:disabled {
  color: #ffffff;
  background-color: #fd5190;
  border-color: #fd5190;
}
.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show > .btn-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #fc1f70;
  border-color: #fc1268;
}
.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(253, 107, 161, 0.5);
}

.btn-success {
  color: #ffffff;
  background-color: #0acb8e;
  border-color: #0acb8e;
}
.btn-success:hover {
  color: #ffffff;
  background-color: #08a775;
  border-color: #089a6c;
}
.btn-success:focus, .btn-success.focus {
  color: #ffffff;
  background-color: #08a775;
  border-color: #089a6c;
  box-shadow: 0 0 0 0.2rem rgba(47, 211, 159, 0.5);
}
.btn-success.disabled, .btn-success:disabled {
  color: #ffffff;
  background-color: #0acb8e;
  border-color: #0acb8e;
}
.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active, .show > .btn-success.dropdown-toggle {
  color: #ffffff;
  background-color: #089a6c;
  border-color: #078e64;
}
.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus, .show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(47, 211, 159, 0.5);
}

.btn-info {
  color: #ffffff;
  background-color: #04c7e0;
  border-color: #04c7e0;
}
.btn-info:hover {
  color: #ffffff;
  background-color: #03a6ba;
  border-color: #039aae;
}
.btn-info:focus, .btn-info.focus {
  color: #ffffff;
  background-color: #03a6ba;
  border-color: #039aae;
  box-shadow: 0 0 0 0.2rem rgba(42, 207, 229, 0.5);
}
.btn-info.disabled, .btn-info:disabled {
  color: #ffffff;
  background-color: #04c7e0;
  border-color: #04c7e0;
}
.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active, .show > .btn-info.dropdown-toggle {
  color: #ffffff;
  background-color: #039aae;
  border-color: #038fa1;
}
.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus, .show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(42, 207, 229, 0.5);
}

.btn-warning {
  color: #2f2f2f;
  background-color: #fec400;
  border-color: #fec400;
}
.btn-warning:hover {
  color: #2f2f2f;
  background-color: #d8a600;
  border-color: #cb9d00;
}
.btn-warning:focus, .btn-warning.focus {
  color: #2f2f2f;
  background-color: #d8a600;
  border-color: #cb9d00;
  box-shadow: 0 0 0 0.2rem rgba(223, 174, 7, 0.5);
}
.btn-warning.disabled, .btn-warning:disabled {
  color: #2f2f2f;
  background-color: #fec400;
  border-color: #fec400;
}
.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active, .show > .btn-warning.dropdown-toggle {
  color: #2f2f2f;
  background-color: #cb9d00;
  border-color: #be9300;
}
.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(223, 174, 7, 0.5);
}

.btn-danger {
  color: #ffffff;
  background-color: #fe5461;
  border-color: #fe5461;
}
.btn-danger:hover {
  color: #ffffff;
  background-color: #fe2e3e;
  border-color: #fe2132;
}
.btn-danger:focus, .btn-danger.focus {
  color: #ffffff;
  background-color: #fe2e3e;
  border-color: #fe2132;
  box-shadow: 0 0 0 0.2rem rgba(254, 110, 121, 0.5);
}
.btn-danger.disabled, .btn-danger:disabled {
  color: #ffffff;
  background-color: #fe5461;
  border-color: #fe5461;
}
.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active, .show > .btn-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #fe2132;
  border-color: #fe1526;
}
.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 110, 121, 0.5);
}

.btn-light {
  color: #2f2f2f;
  background-color: #f0f1f5;
  border-color: #f0f1f5;
}
.btn-light:hover {
  color: #2f2f2f;
  background-color: #d9dce6;
  border-color: #d1d4e1;
}
.btn-light:focus, .btn-light.focus {
  color: #2f2f2f;
  background-color: #d9dce6;
  border-color: #d1d4e1;
  box-shadow: 0 0 0 0.2rem rgba(211, 212, 215, 0.5);
}
.btn-light.disabled, .btn-light:disabled {
  color: #2f2f2f;
  background-color: #f0f1f5;
  border-color: #f0f1f5;
}
.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active, .show > .btn-light.dropdown-toggle {
  color: #2f2f2f;
  background-color: #d1d4e1;
  border-color: #cacddc;
}
.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus, .show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(211, 212, 215, 0.5);
}

.btn-dark {
  color: #ffffff;
  background-color: #31343d;
  border-color: #31343d;
}
.btn-dark:hover {
  color: #ffffff;
  background-color: #202228;
  border-color: #1a1c21;
}
.btn-dark:focus, .btn-dark.focus {
  color: #ffffff;
  background-color: #202228;
  border-color: #1a1c21;
  box-shadow: 0 0 0 0.2rem rgba(80, 82, 90, 0.5);
}
.btn-dark.disabled, .btn-dark:disabled {
  color: #ffffff;
  background-color: #31343d;
  border-color: #31343d;
}
.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active, .show > .btn-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #1a1c21;
  border-color: #15161a;
}
.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(80, 82, 90, 0.5);
}

.btn-info-dark {
  color: #ffffff;
  background-color: #6493fa;
  border-color: #6493fa;
}
.btn-info-dark:hover {
  color: #ffffff;
  background-color: #3f79f9;
  border-color: #3371f8;
}
.btn-info-dark:focus, .btn-info-dark.focus {
  color: #ffffff;
  background-color: #3f79f9;
  border-color: #3371f8;
  box-shadow: 0 0 0 0.2rem rgba(123, 163, 251, 0.5);
}
.btn-info-dark.disabled, .btn-info-dark:disabled {
  color: #ffffff;
  background-color: #6493fa;
  border-color: #6493fa;
}
.btn-info-dark:not(:disabled):not(.disabled):active, .btn-info-dark:not(:disabled):not(.disabled).active, .show > .btn-info-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #3371f8;
  border-color: #2668f8;
}
.btn-info-dark:not(:disabled):not(.disabled):active:focus, .btn-info-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-info-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(123, 163, 251, 0.5);
}

.btn-smoke {
  color: #ffffff;
  background-color: #8a909d;
  border-color: #8a909d;
}
.btn-smoke:hover {
  color: #ffffff;
  background-color: #757c8c;
  border-color: #6f7685;
}
.btn-smoke:focus, .btn-smoke.focus {
  color: #ffffff;
  background-color: #757c8c;
  border-color: #6f7685;
  box-shadow: 0 0 0 0.2rem rgba(156, 161, 172, 0.5);
}
.btn-smoke.disabled, .btn-smoke:disabled {
  color: #ffffff;
  background-color: #8a909d;
  border-color: #8a909d;
}
.btn-smoke:not(:disabled):not(.disabled):active, .btn-smoke:not(:disabled):not(.disabled).active, .show > .btn-smoke.dropdown-toggle {
  color: #ffffff;
  background-color: #6f7685;
  border-color: #69707e;
}
.btn-smoke:not(:disabled):not(.disabled):active:focus, .btn-smoke:not(:disabled):not(.disabled).active:focus, .show > .btn-smoke.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(156, 161, 172, 0.5);
}

.btn-outline-primary {
  color: #9e6de0;
  border-color: #9e6de0;
}
.btn-outline-primary:hover {
  color: #ffffff;
  background-color: #9e6de0;
  border-color: #9e6de0;
}
.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(158, 109, 224, 0.5);
}
.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #9e6de0;
  background-color: transparent;
}
.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #9e6de0;
  border-color: #9e6de0;
}
.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(158, 109, 224, 0.5);
}

.btn-outline-secondary {
  color: #fd5190;
  border-color: #fd5190;
}
.btn-outline-secondary:hover {
  color: #ffffff;
  background-color: #fd5190;
  border-color: #fd5190;
}
.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(253, 81, 144, 0.5);
}
.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #fd5190;
  background-color: transparent;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .show > .btn-outline-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #fd5190;
  border-color: #fd5190;
}
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(253, 81, 144, 0.5);
}

.btn-outline-success {
  color: #0acb8e;
  border-color: #0acb8e;
}
.btn-outline-success:hover {
  color: #ffffff;
  background-color: #0acb8e;
  border-color: #0acb8e;
}
.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(10, 203, 142, 0.5);
}
.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #0acb8e;
  background-color: transparent;
}
.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .show > .btn-outline-success.dropdown-toggle {
  color: #ffffff;
  background-color: #0acb8e;
  border-color: #0acb8e;
}
.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(10, 203, 142, 0.5);
}

.btn-outline-info {
  color: #04c7e0;
  border-color: #04c7e0;
}
.btn-outline-info:hover {
  color: #ffffff;
  background-color: #04c7e0;
  border-color: #04c7e0;
}
.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(4, 199, 224, 0.5);
}
.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #04c7e0;
  background-color: transparent;
}
.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active, .show > .btn-outline-info.dropdown-toggle {
  color: #ffffff;
  background-color: #04c7e0;
  border-color: #04c7e0;
}
.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(4, 199, 224, 0.5);
}

.btn-outline-warning {
  color: #fec400;
  border-color: #fec400;
}
.btn-outline-warning:hover {
  color: #2f2f2f;
  background-color: #fec400;
  border-color: #fec400;
}
.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 196, 0, 0.5);
}
.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #fec400;
  background-color: transparent;
}
.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active, .show > .btn-outline-warning.dropdown-toggle {
  color: #2f2f2f;
  background-color: #fec400;
  border-color: #fec400;
}
.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 196, 0, 0.5);
}

.btn-outline-danger {
  color: #fe5461;
  border-color: #fe5461;
}
.btn-outline-danger:hover {
  color: #ffffff;
  background-color: #fe5461;
  border-color: #fe5461;
}
.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 84, 97, 0.5);
}
.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #fe5461;
  background-color: transparent;
}
.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active, .show > .btn-outline-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #fe5461;
  border-color: #fe5461;
}
.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(254, 84, 97, 0.5);
}

.btn-outline-light {
  color: #f0f1f5;
  border-color: #f0f1f5;
}
.btn-outline-light:hover {
  color: #2f2f2f;
  background-color: #f0f1f5;
  border-color: #f0f1f5;
}
.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(240, 241, 245, 0.5);
}
.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f0f1f5;
  background-color: transparent;
}
.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active, .show > .btn-outline-light.dropdown-toggle {
  color: #2f2f2f;
  background-color: #f0f1f5;
  border-color: #f0f1f5;
}
.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(240, 241, 245, 0.5);
}

.btn-outline-dark {
  color: #31343d;
  border-color: #31343d;
}
.btn-outline-dark:hover {
  color: #ffffff;
  background-color: #31343d;
  border-color: #31343d;
}
.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(49, 52, 61, 0.5);
}
.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #31343d;
  background-color: transparent;
}
.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active, .show > .btn-outline-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #31343d;
  border-color: #31343d;
}
.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(49, 52, 61, 0.5);
}

.btn-outline-info-dark {
  color: #6493fa;
  border-color: #6493fa;
}
.btn-outline-info-dark:hover {
  color: #ffffff;
  background-color: #6493fa;
  border-color: #6493fa;
}
.btn-outline-info-dark:focus, .btn-outline-info-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(100, 147, 250, 0.5);
}
.btn-outline-info-dark.disabled, .btn-outline-info-dark:disabled {
  color: #6493fa;
  background-color: transparent;
}
.btn-outline-info-dark:not(:disabled):not(.disabled):active, .btn-outline-info-dark:not(:disabled):not(.disabled).active, .show > .btn-outline-info-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #6493fa;
  border-color: #6493fa;
}
.btn-outline-info-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-info-dark:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-info-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(100, 147, 250, 0.5);
}

.btn-outline-smoke {
  color: #8a909d;
  border-color: #8a909d;
}
.btn-outline-smoke:hover {
  color: #ffffff;
  background-color: #8a909d;
  border-color: #8a909d;
}
.btn-outline-smoke:focus, .btn-outline-smoke.focus {
  box-shadow: 0 0 0 0.2rem rgba(138, 144, 157, 0.5);
}
.btn-outline-smoke.disabled, .btn-outline-smoke:disabled {
  color: #8a909d;
  background-color: transparent;
}
.btn-outline-smoke:not(:disabled):not(.disabled):active, .btn-outline-smoke:not(:disabled):not(.disabled).active, .show > .btn-outline-smoke.dropdown-toggle {
  color: #ffffff;
  background-color: #8a909d;
  border-color: #8a909d;
}
.btn-outline-smoke:not(:disabled):not(.disabled):active:focus, .btn-outline-smoke:not(:disabled):not(.disabled).active:focus, .show > .btn-outline-smoke.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(138, 144, 157, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #9e6de0;
  text-decoration: none;
}
.btn-link:hover {
  color: #742ed3;
  text-decoration: underline;
}
.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
}
.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.65rem 1.5rem;
  font-size: 1.171875rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.125rem 0.625rem;
  font-size: 0.75rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type=submit].btn-block,
input[type=reset].btn-block,
input[type=button].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.width {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.width {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 0.9375rem;
  color: #8a909d;
  text-align: left;
  list-style: none;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1500px) {
  .dropdown-menu-xxl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-right {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}
.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}
.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}
.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}
.dropleft .dropdown-toggle::after {
  display: none;
}
.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}
.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^=top], .dropdown-menu[x-placement^=right], .dropdown-menu[x-placement^=bottom], .dropdown-menu[x-placement^=left] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #f0f1f5;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #2f2f2f;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}
.dropdown-item:hover, .dropdown-item:focus {
  color: #222222;
  text-decoration: none;
  background-color: #f0f1f5;
}
.dropdown-item.active, .dropdown-item:active {
  color: #ffffff;
  text-decoration: none;
  background-color: #9e6de0;
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: #adb5bd;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.75rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #2f2f2f;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}
.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropright .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.46875rem;
  padding-left: 0.46875rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}
.btn-group-toggle > .btn input[type=radio],
.btn-group-toggle > .btn input[type=checkbox],
.btn-group-toggle > .btn-group > .btn input[type=radio],
.btn-group-toggle > .btn-group > .btn input[type=checkbox] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
  margin-bottom: 0;
}
.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}
.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}
.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}
.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .custom-file {
  display: flex;
  align-items: center;
}
.input-group > .custom-file:not(:last-child) .custom-file-label, .input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group:not(.has-validation) > .form-control:not(:last-child),
.input-group:not(.has-validation) > .custom-select:not(:last-child),
.input-group:not(.has-validation) > .custom-file:not(:last-child) .custom-file-label,
.input-group:not(.has-validation) > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > .form-control:nth-last-child(n+3),
.input-group.has-validation > .custom-select:nth-last-child(n+3),
.input-group.has-validation > .custom-file:nth-last-child(n+3) .custom-file-label,
.input-group.has-validation > .custom-file:nth-last-child(n+3) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: flex;
}
.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}
.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
  z-index: 3;
}
.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.56rem 1rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #f0f1f5;
  border: 1px solid #e5e9f2;
  border-radius: 0.25rem;
}
.input-group-text input[type=radio],
.input-group-text input[type=checkbox] {
  margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1.3rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.65rem 1.5rem;
  font-size: 1.171875rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.25rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.125rem 0.625rem;
  font-size: 0.75rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 2rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group:not(.has-validation) > .input-group-append:not(:last-child) > .btn,
.input-group:not(.has-validation) > .input-group-append:not(:last-child) > .input-group-text,
.input-group.has-validation > .input-group-append:nth-last-child(n+3) > .btn,
.input-group.has-validation > .input-group-append:nth-last-child(n+3) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  z-index: 1;
  display: block;
  min-height: 1.40625rem;
  padding-left: 1.5rem;
  -webkit-print-color-adjust: exact;
          print-color-adjust: exact;
}

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.203125rem;
  opacity: 0;
}
.custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  border-color: #9e6de0;
  background-color: #9e6de0;
}
.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem transparent;
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #e4d6f6;
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #ffffff;
  background-color: white;
  border-color: white;
}
.custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}
.custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #f0f1f5;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}
.custom-control-label::before {
  position: absolute;
  top: 0.203125rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #ffffff;
  border: 1px solid #adb5bd;
}
.custom-control-label::after {
  position: absolute;
  top: 0.203125rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: 50%/50% 50% no-repeat;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}
.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23ffffff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #9e6de0;
  background-color: #9e6de0;
}
.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23ffffff' d='M0 2h4'/%3e%3c/svg%3e");
}
.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(158, 109, 224, 0.5);
}
.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(158, 109, 224, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}
.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ffffff'/%3e%3c/svg%3e");
}
.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(158, 109, 224, 0.5);
}

.custom-switch {
  padding-left: 2.25rem;
}
.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}
.custom-switch .custom-control-label::after {
  top: calc(0.203125rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #adb5bd;
  border-radius: 0.5rem;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}
.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #ffffff;
  transform: translateX(0.75rem);
}
.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(158, 109, 224, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 1.12rem + 2px);
  padding: 0.56rem 2rem 0.56rem 1rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #ffffff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right 1rem center/8px 10px no-repeat;
  border: 1px solid #e5e9f2;
  border-radius: 0.25rem;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.custom-select:focus {
  border-color: #e4d6f6;
  outline: 0;
  box-shadow: 0 0 0 0.2rem transparent;
}
.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #ffffff;
}
.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 1rem;
  background-image: none;
}
.custom-select:disabled {
  color: #6c757d;
  background-color: #f0f1f5;
}
.custom-select::-ms-expand {
  display: none;
}
.custom-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.custom-select-sm {
  height: calc(1.5em + 0.25rem + 2px);
  padding-top: 0.125rem;
  padding-bottom: 0.125rem;
  padding-left: 0.625rem;
  font-size: 0.75rem;
}

.custom-select-lg {
  height: calc(1.5em + 1.3rem + 2px);
  padding-top: 0.65rem;
  padding-bottom: 0.65rem;
  padding-left: 1.5rem;
  font-size: 1.171875rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 1.12rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 1.12rem + 2px);
  margin: 0;
  overflow: hidden;
  opacity: 0;
}
.custom-file-input:focus ~ .custom-file-label {
  border-color: #e4d6f6;
  box-shadow: 0 0 0 0.2rem transparent;
}
.custom-file-input[disabled] ~ .custom-file-label, .custom-file-input:disabled ~ .custom-file-label {
  background-color: #f0f1f5;
}
.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}
.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 1.12rem + 2px);
  padding: 0.56rem 1rem;
  overflow: hidden;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #ffffff;
  border: 1px solid #e5e9f2;
  border-radius: 0.25rem;
}
.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 1.12rem);
  padding: 0.56rem 1rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #f0f1f5;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.custom-range:focus {
  outline: 0;
}
.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #f0f1f5, 0 0 0 0.2rem transparent;
}
.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #f0f1f5, 0 0 0 0.2rem transparent;
}
.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #f0f1f5, 0 0 0 0.2rem transparent;
}
.custom-range::-moz-focus-outer {
  border: 0;
}
.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #9e6de0;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
          appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.custom-range::-webkit-slider-thumb:active {
  background-color: white;
}
.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #b6bdca;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #9e6de0;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
       appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.custom-range::-moz-range-thumb:active {
  background-color: white;
}
.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #b6bdca;
  border-color: transparent;
  border-radius: 1rem;
}
.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #9e6de0;
  border: 0;
  border-radius: 1rem;
  -ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}
@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    -ms-transition: none;
    transition: none;
  }
}
.custom-range::-ms-thumb:active {
  background-color: white;
}
.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}
.custom-range::-ms-fill-lower {
  background-color: #b6bdca;
  border-radius: 1rem;
}
.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #b6bdca;
  border-radius: 1rem;
}
.custom-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}
.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}
.custom-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}
.custom-range:disabled::-moz-range-track {
  cursor: default;
}
.custom-range:disabled::-ms-thumb {
  background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .custom-control-label::before,
  .custom-file-label,
  .custom-select {
    transition: none;
  }
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}
.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}
.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #e5e9f2;
}
.nav-tabs .nav-link {
  margin-bottom: -1px;
  background-color: transparent;
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: #f0f1f5 #f0f1f5 #e5e9f2;
}
.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #9e6de0;
  background-color: #ffffff;
  border-color: #e5e9f2 #e5e9f2 #ffffff;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 2rem;
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #ffffff;
  background-color: #9e6de0;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}
.navbar .container,
.navbar .container-fluid,
.navbar .container-sm,
.navbar .container-md,
.navbar .container-lg,
.navbar .container-xl {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  display: inline-block;
  padding-top: 0.32421875rem;
  padding-bottom: 0.32421875rem;
  margin-right: 1rem;
  font-size: 1.171875rem;
  line-height: inherit;
  white-space: nowrap;
}
.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}
.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.171875rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}
.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: 50%/100% 100% no-repeat;
}

.navbar-nav-scroll {
  max-height: 75vh;
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid,
  .navbar-expand-sm > .container-sm,
  .navbar-expand-sm > .container-md,
  .navbar-expand-sm > .container-lg,
  .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid,
  .navbar-expand-sm > .container-sm,
  .navbar-expand-sm > .container-md,
  .navbar-expand-sm > .container-lg,
  .navbar-expand-sm > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid,
  .navbar-expand-md > .container-sm,
  .navbar-expand-md > .container-md,
  .navbar-expand-md > .container-lg,
  .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid,
  .navbar-expand-md > .container-sm,
  .navbar-expand-md > .container-md,
  .navbar-expand-md > .container-lg,
  .navbar-expand-md > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid,
  .navbar-expand-lg > .container-sm,
  .navbar-expand-lg > .container-md,
  .navbar-expand-lg > .container-lg,
  .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid,
  .navbar-expand-lg > .container-sm,
  .navbar-expand-lg > .container-md,
  .navbar-expand-lg > .container-lg,
  .navbar-expand-lg > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid,
  .navbar-expand-xl > .container-sm,
  .navbar-expand-xl > .container-md,
  .navbar-expand-xl > .container-lg,
  .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid,
  .navbar-expand-xl > .container-sm,
  .navbar-expand-xl > .container-md,
  .navbar-expand-xl > .container-lg,
  .navbar-expand-xl > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}
@media (max-width: 1499.98px) {
  .navbar-expand-xxl > .container,
  .navbar-expand-xxl > .container-fluid,
  .navbar-expand-xxl > .container-sm,
  .navbar-expand-xxl > .container-md,
  .navbar-expand-xxl > .container-lg,
  .navbar-expand-xxl > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}
@media (min-width: 1500px) {
  .navbar-expand-xxl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xxl > .container,
  .navbar-expand-xxl > .container-fluid,
  .navbar-expand-xxl > .container-sm,
  .navbar-expand-xxl > .container-md,
  .navbar-expand-xxl > .container-lg,
  .navbar-expand-xxl > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
}
.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-sm,
.navbar-expand > .container-md,
.navbar-expand > .container-lg,
.navbar-expand > .container-xl {
  padding-right: 0;
  padding-left: 0;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}
.navbar-expand > .container,
.navbar-expand > .container-fluid,
.navbar-expand > .container-sm,
.navbar-expand > .container-md,
.navbar-expand > .container-lg,
.navbar-expand > .container-xl {
  flex-wrap: nowrap;
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}
.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}
.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}
.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}
.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}
.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #ffffff;
}
.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #ffffff;
}
.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}
.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}
.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}
.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #ffffff;
}
.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}
.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}
.navbar-dark .navbar-text a {
  color: #ffffff;
}
.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #ffffff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #ffffff;
  background-clip: border-box;
  border: 1px solid #e5e9f2;
  border-radius: 0.25rem;
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.875rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}
.card-link + .card-link {
  margin-left: 1.875rem;
}

.card-header {
  padding: 0.75rem 1.875rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid #e5e9f2;
}
.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
  padding: 0.75rem 1.875rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid #e5e9f2;
}
.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.9375rem;
  margin-bottom: -0.75rem;
  margin-left: -0.9375rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.9375rem;
  margin-left: -0.9375rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
  border-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
  flex-shrink: 0;
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck .card {
  margin-bottom: 15px;
}
@media (min-width: 576px) {
  .card-deck {
    display: flex;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    flex: 1 0 0%;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group > .card {
  margin-bottom: 15px;
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}
@media (min-width: 576px) {
  .card-columns {
    -moz-column-count: 3;
         column-count: 3;
    -moz-column-gap: 1.25rem;
         column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion {
  overflow-anchor: none;
}
.accordion > .card {
  overflow: hidden;
}
.accordion > .card:not(:last-of-type) {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.accordion > .card:not(:first-of-type) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.accordion > .card > .card-header {
  border-radius: 0;
  margin-bottom: -1px;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: transparent;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}
.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}
.breadcrumb-item.active {
  color: #8a909d;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 1rem 1.3125rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #9e6de0;
  background-color: #ffffff;
  border: 1px solid #e5e9f2;
}
.page-link:hover {
  z-index: 2;
  color: #742ed3;
  text-decoration: none;
  background-color: #f0f1f5;
  border-color: #b6bdca;
}
.page-link:focus {
  z-index: 3;
  outline: 0;
  box-shadow: 0 0 0 0.2rem transparent;
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}
.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}
.page-item.active .page-link {
  z-index: 3;
  color: #ffffff;
  background-color: #9e6de0;
  border-color: #9e6de0;
}
.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #ffffff;
  border-color: #b6bdca;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.171875rem;
  line-height: 1.5;
}
.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}
.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.75rem;
  line-height: 1.5;
}
.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}
.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.3em 0.84em;
  font-size: 80%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .badge {
    transition: none;
  }
}
a.badge:hover, a.badge:focus {
  text-decoration: none;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #ffffff;
  background-color: #9e6de0;
}
a.badge-primary:hover, a.badge-primary:focus {
  color: #ffffff;
  background-color: #8243d7;
}
a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(158, 109, 224, 0.5);
}

.badge-secondary {
  color: #ffffff;
  background-color: #fd5190;
}
a.badge-secondary:hover, a.badge-secondary:focus {
  color: #ffffff;
  background-color: #fc1f70;
}
a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(253, 81, 144, 0.5);
}

.badge-success {
  color: #ffffff;
  background-color: #0acb8e;
}
a.badge-success:hover, a.badge-success:focus {
  color: #ffffff;
  background-color: #089a6c;
}
a.badge-success:focus, a.badge-success.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(10, 203, 142, 0.5);
}

.badge-info {
  color: #ffffff;
  background-color: #04c7e0;
}
a.badge-info:hover, a.badge-info:focus {
  color: #ffffff;
  background-color: #039aae;
}
a.badge-info:focus, a.badge-info.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(4, 199, 224, 0.5);
}

.badge-warning {
  color: #2f2f2f;
  background-color: #fec400;
}
a.badge-warning:hover, a.badge-warning:focus {
  color: #2f2f2f;
  background-color: #cb9d00;
}
a.badge-warning:focus, a.badge-warning.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(254, 196, 0, 0.5);
}

.badge-danger {
  color: #ffffff;
  background-color: #fe5461;
}
a.badge-danger:hover, a.badge-danger:focus {
  color: #ffffff;
  background-color: #fe2132;
}
a.badge-danger:focus, a.badge-danger.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(254, 84, 97, 0.5);
}

.badge-light {
  color: #2f2f2f;
  background-color: #f0f1f5;
}
a.badge-light:hover, a.badge-light:focus {
  color: #2f2f2f;
  background-color: #d1d4e1;
}
a.badge-light:focus, a.badge-light.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(240, 241, 245, 0.5);
}

.badge-dark {
  color: #ffffff;
  background-color: #31343d;
}
a.badge-dark:hover, a.badge-dark:focus {
  color: #ffffff;
  background-color: #1a1c21;
}
a.badge-dark:focus, a.badge-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(49, 52, 61, 0.5);
}

.badge-info-dark {
  color: #ffffff;
  background-color: #6493fa;
}
a.badge-info-dark:hover, a.badge-info-dark:focus {
  color: #ffffff;
  background-color: #3371f8;
}
a.badge-info-dark:focus, a.badge-info-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(100, 147, 250, 0.5);
}

.badge-smoke {
  color: #ffffff;
  background-color: #8a909d;
}
a.badge-smoke:hover, a.badge-smoke:focus {
  color: #ffffff;
  background-color: #6f7685;
}
a.badge-smoke:focus, a.badge-smoke.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(138, 144, 157, 0.5);
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #f0f1f5;
  border-radius: 0.3rem;
}
@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 3.90625rem;
}
.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #ece2f9;
  background-color: #9e6de0;
  border-color: #9e6de0;
}
.alert-primary hr {
  border-top-color: #9058dc;
}
.alert-primary .alert-link {
  color: #d0b8f0;
}

.alert-secondary {
  color: #ffdce9;
  background-color: #fd5190;
  border-color: #fd5190;
}
.alert-secondary hr {
  border-top-color: #fd3880;
}
.alert-secondary .alert-link {
  color: #ffa9c9;
}

.alert-success {
  color: #cef5e8;
  background-color: #0acb8e;
  border-color: #0acb8e;
}
.alert-success hr {
  border-top-color: #09b37d;
}
.alert-success .alert-link {
  color: #a4ecd4;
}

.alert-info {
  color: #cdf4f9;
  background-color: #04c7e0;
  border-color: #04c7e0;
}
.alert-info hr {
  border-top-color: #04b1c7;
}
.alert-info .alert-link {
  color: #9feaf4;
}

.alert-warning {
  color: #fff3cc;
  background-color: #fec400;
  border-color: #fec400;
}
.alert-warning hr {
  border-top-color: #e5b000;
}
.alert-warning .alert-link {
  color: #ffe799;
}

.alert-danger {
  color: #ffdddf;
  background-color: #fe5461;
  border-color: #fe5461;
}
.alert-danger hr {
  border-top-color: #fe3b4a;
}
.alert-danger .alert-link {
  color: #ffaaaf;
}

.alert-light {
  color: #fcfcfd;
  background-color: #f0f1f5;
  border-color: #f0f1f5;
}
.alert-light hr {
  border-top-color: #e1e3eb;
}
.alert-light .alert-link {
  color: #dddde9;
}

.alert-dark {
  color: #d6d6d8;
  background-color: #31343d;
  border-color: #31343d;
}
.alert-dark hr {
  border-top-color: #26282f;
}
.alert-dark .alert-link {
  color: #bcbcbf;
}

.alert-info-dark {
  color: #e0e9fe;
  background-color: #6493fa;
  border-color: #6493fa;
}
.alert-info-dark hr {
  border-top-color: #4b82f9;
}
.alert-info-dark .alert-link {
  color: #afc6fc;
}

.alert-smoke {
  color: #e8e9eb;
  background-color: #8a909d;
  border-color: #8a909d;
}
.alert-smoke hr {
  border-top-color: #7c8391;
}
.alert-smoke .alert-link {
  color: #cdcfd3;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  line-height: 0;
  font-size: 0.703125rem;
  background-color: #f0f1f5;
  border-radius: 0.25rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  background-color: #9e6de0;
  transition: width 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.media {
  display: flex;
  align-items: flex-start;
}

.media-body {
  flex: 1;
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f5f6fa;
}
.list-group-item-action:active {
  color: #8a909d;
  background-color: #f0f1f5;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  background-color: #ffffff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #ffffff;
}
.list-group-item.active {
  z-index: 2;
  color: #ffffff;
  background-color: #9e6de0;
  border-color: #9e6de0;
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
@media (min-width: 1500px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #523974;
  background-color: #e4d6f6;
}
.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #523974;
  background-color: #d6c1f1;
}
.list-group-item-primary.list-group-item-action.active {
  color: #ffffff;
  background-color: #523974;
  border-color: #523974;
}

.list-group-item-secondary {
  color: #842a4b;
  background-color: #fecee0;
}
.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #842a4b;
  background-color: #fdb5d0;
}
.list-group-item-secondary.list-group-item-action.active {
  color: #ffffff;
  background-color: #842a4b;
  border-color: #842a4b;
}

.list-group-item-success {
  color: #056a4a;
  background-color: #baf0df;
}
.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #056a4a;
  background-color: #a5ebd5;
}
.list-group-item-success.list-group-item-action.active {
  color: #ffffff;
  background-color: #056a4a;
  border-color: #056a4a;
}

.list-group-item-info {
  color: #026774;
  background-color: #b9eff6;
}
.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #026774;
  background-color: #a2eaf3;
}
.list-group-item-info.list-group-item-action.active {
  color: #ffffff;
  background-color: #026774;
  border-color: #026774;
}

.list-group-item-warning {
  color: #846600;
  background-color: #ffeeb8;
}
.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #846600;
  background-color: #ffe89f;
}
.list-group-item-warning.list-group-item-action.active {
  color: #ffffff;
  background-color: #846600;
  border-color: #846600;
}

.list-group-item-danger {
  color: #842c32;
  background-color: #ffcfd3;
}
.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #842c32;
  background-color: #ffb6bc;
}
.list-group-item-danger.list-group-item-action.active {
  color: #ffffff;
  background-color: #842c32;
  border-color: #842c32;
}

.list-group-item-light {
  color: #7d7d7f;
  background-color: #fbfbfc;
}
.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #7d7d7f;
  background-color: #ececf1;
}
.list-group-item-light.list-group-item-action.active {
  color: #ffffff;
  background-color: #7d7d7f;
  border-color: #7d7d7f;
}

.list-group-item-dark {
  color: #191b20;
  background-color: #c5c6c9;
}
.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #191b20;
  background-color: #b8b9bd;
}
.list-group-item-dark.list-group-item-action.active {
  color: #ffffff;
  background-color: #191b20;
  border-color: #191b20;
}

.list-group-item-info-dark {
  color: #344c82;
  background-color: #d4e1fe;
}
.list-group-item-info-dark.list-group-item-action:hover, .list-group-item-info-dark.list-group-item-action:focus {
  color: #344c82;
  background-color: #bbd0fd;
}
.list-group-item-info-dark.list-group-item-action.active {
  color: #ffffff;
  background-color: #344c82;
  border-color: #344c82;
}

.list-group-item-smoke {
  color: #484b52;
  background-color: #dee0e4;
}
.list-group-item-smoke.list-group-item-action:hover, .list-group-item-smoke.list-group-item-action:focus {
  color: #484b52;
  background-color: #d0d3d9;
}
.list-group-item-smoke.list-group-item-action.active {
  color: #ffffff;
  background-color: #484b52;
  border-color: #484b52;
}

.close {
  float: right;
  font-size: 1.40625rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.5;
}
.close:hover {
  color: #000;
  text-decoration: none;
}
.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: 0.75;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
}

a.close.disabled {
  pointer-events: none;
}

.toast {
  flex-basis: 350px;
  max-width: 350px;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  opacity: 0;
  border-radius: 0.25rem;
}
.toast:not(:last-child) {
  margin-bottom: 0.75rem;
}
.toast.showing {
  opacity: 1;
}
.toast.show {
  display: block;
  opacity: 1;
}
.toast.hide {
  display: none;
}

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.toast-body {
  padding: 0.75rem;
}

.modal-open {
  overflow: hidden;
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  display: flex;
  max-height: calc(100% - 1rem);
}
.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden;
}
.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  flex-shrink: 0;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem);
}
.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  height: -moz-min-content;
  height: min-content;
  content: "";
}
.modal-dialog-centered.modal-dialog-scrollable {
  flex-direction: column;
  justify-content: center;
  height: 100%;
}
.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}
.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #e5e9f2;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.modal-header .close {
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #e5e9f2;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}
.modal-footer > * {
  margin: 0.25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem);
  }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered::before {
    height: calc(100vh - 3.5rem);
    height: -moz-min-content;
    height: min-content;
  }
  .modal-sm {
    max-width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Karla", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: 0.9;
}
.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}
.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^=top] {
  padding: 0.4rem 0;
}
.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^=top] .arrow {
  bottom: 0;
}
.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^=top] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^=right] {
  padding: 0 0.4rem;
}
.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^=right] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^=right] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^=bottom] {
  padding: 0.4rem 0;
}
.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^=bottom] .arrow {
  top: 0;
}
.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^=bottom] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^=left] {
  padding: 0 0.4rem;
}
.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^=left] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}
.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^=left] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #ffffff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Karla", sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: 0.8125rem;
  word-wrap: break-word;
  background-color: #1d1f26;
  background-clip: padding-box;
  border: 1px solid #1d1f26;
  border-radius: 0.3rem;
}
.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}
.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^=top] {
  margin-bottom: 0.5rem;
}
.bs-popover-top > .arrow, .bs-popover-auto[x-placement^=top] > .arrow {
  bottom: calc(-0.5rem - 1px);
}
.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^=top] > .arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #1d1f26;
}
.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^=top] > .arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #1d1f26;
}

.bs-popover-right, .bs-popover-auto[x-placement^=right] {
  margin-left: 0.5rem;
}
.bs-popover-right > .arrow, .bs-popover-auto[x-placement^=right] > .arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^=right] > .arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #1d1f26;
}
.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^=right] > .arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #1d1f26;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^=bottom] {
  margin-top: 0.5rem;
}
.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^=bottom] > .arrow {
  top: calc(-0.5rem - 1px);
}
.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^=bottom] > .arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #1d1f26;
}
.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^=bottom] > .arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #1d1f26;
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #1d1f26;
}

.bs-popover-left, .bs-popover-auto[x-placement^=left] {
  margin-right: 0.5rem;
}
.bs-popover-left > .arrow, .bs-popover-auto[x-placement^=left] > .arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}
.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^=left] > .arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #1d1f26;
}
.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^=left] > .arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #1d1f26;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.9375rem;
  color: #ffffff;
  background-color: #1d1f26;
  border-bottom: 1px solid #121318;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #ffffff;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #ffffff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #ffffff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: 50%/100% 100% no-repeat;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}
.carousel-indicators li {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #ffffff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #ffffff;
  text-align: center;
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg);
  }
}
.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentcolor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentcolor;
  border-radius: 50%;
  opacity: 0;
  animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    animation-duration: 1.5s;
  }
}
.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #9e6de0 !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #8243d7 !important;
}

.bg-secondary {
  background-color: #fd5190 !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #fc1f70 !important;
}

.bg-success {
  background-color: #0acb8e !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #089a6c !important;
}

.bg-info {
  background-color: #04c7e0 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #039aae !important;
}

.bg-warning {
  background-color: #fec400 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #cb9d00 !important;
}

.bg-danger {
  background-color: #fe5461 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #fe2132 !important;
}

.bg-light {
  background-color: #f0f1f5 !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #d1d4e1 !important;
}

.bg-dark {
  background-color: #31343d !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1a1c21 !important;
}

.bg-info-dark {
  background-color: #6493fa !important;
}

a.bg-info-dark:hover, a.bg-info-dark:focus,
button.bg-info-dark:hover,
button.bg-info-dark:focus {
  background-color: #3371f8 !important;
}

.bg-smoke {
  background-color: #8a909d !important;
}

a.bg-smoke:hover, a.bg-smoke:focus,
button.bg-smoke:hover,
button.bg-smoke:focus {
  background-color: #6f7685 !important;
}

.bg-white {
  background-color: #ffffff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #e5e9f2 !important;
}

.border-top {
  border-top: 1px solid #e5e9f2 !important;
}

.border-right {
  border-right: 1px solid #e5e9f2 !important;
}

.border-bottom {
  border-bottom: 1px solid #e5e9f2 !important;
}

.border-left {
  border-left: 1px solid #e5e9f2 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #9e6de0 !important;
}

.border-secondary {
  border-color: #fd5190 !important;
}

.border-success {
  border-color: #0acb8e !important;
}

.border-info {
  border-color: #04c7e0 !important;
}

.border-warning {
  border-color: #fec400 !important;
}

.border-danger {
  border-color: #fe5461 !important;
}

.border-light {
  border-color: #f0f1f5 !important;
}

.border-dark {
  border-color: #31343d !important;
}

.border-info-dark {
  border-color: #6493fa !important;
}

.border-smoke {
  border-color: #8a909d !important;
}

.border-white {
  border-color: #ffffff !important;
}

.rounded-sm {
  border-radius: 0.2rem !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
}
@media (min-width: 1500px) {
  .d-xxl-none {
    display: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
}
@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
}
.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}
.embed-responsive::before {
  display: block;
  content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.85714286%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
}
@media (min-width: 1500px) {
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
}
.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}
@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}
@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}
@media (min-width: 1500px) {
  .float-xxl-left {
    float: left !important;
  }
  .float-xxl-right {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
}
.user-select-all {
  -webkit-user-select: all !important;
     -moz-user-select: all !important;
          user-select: all !important;
}

.user-select-auto {
  -webkit-user-select: auto !important;
     -moz-user-select: auto !important;
          user-select: auto !important;
}

.user-select-none {
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
          user-select: none !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.vw-100 {
  width: 100vw !important;
}

.vh-100 {
  height: 100vh !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.3125rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.3125rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.3125rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.3125rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.3125rem !important;
}

.m-2 {
  margin: 0.625rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.625rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.625rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.625rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.625rem !important;
}

.m-3 {
  margin: 0.9375rem !important;
}

.mt-3,
.my-3 {
  margin-top: 0.9375rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 0.9375rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 0.9375rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 0.9375rem !important;
}

.m-4 {
  margin: 1.25rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.25rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.25rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.25rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.25rem !important;
}

.m-5 {
  margin: 1.5625rem !important;
}

.mt-5,
.my-5 {
  margin-top: 1.5625rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 1.5625rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 1.5625rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 1.5625rem !important;
}

.m-6 {
  margin: 1.875rem !important;
}

.mt-6,
.my-6 {
  margin-top: 1.875rem !important;
}

.mr-6,
.mx-6 {
  margin-right: 1.875rem !important;
}

.mb-6,
.my-6 {
  margin-bottom: 1.875rem !important;
}

.ml-6,
.mx-6 {
  margin-left: 1.875rem !important;
}

.m-7 {
  margin: 3.125rem !important;
}

.mt-7,
.my-7 {
  margin-top: 3.125rem !important;
}

.mr-7,
.mx-7 {
  margin-right: 3.125rem !important;
}

.mb-7,
.my-7 {
  margin-bottom: 3.125rem !important;
}

.ml-7,
.mx-7 {
  margin-left: 3.125rem !important;
}

.m-8 {
  margin: 4.0625rem !important;
}

.mt-8,
.my-8 {
  margin-top: 4.0625rem !important;
}

.mr-8,
.mx-8 {
  margin-right: 4.0625rem !important;
}

.mb-8,
.my-8 {
  margin-bottom: 4.0625rem !important;
}

.ml-8,
.mx-8 {
  margin-left: 4.0625rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.3125rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.3125rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.3125rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.3125rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.3125rem !important;
}

.p-2 {
  padding: 0.625rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.625rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.625rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.625rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.625rem !important;
}

.p-3 {
  padding: 0.9375rem !important;
}

.pt-3,
.py-3 {
  padding-top: 0.9375rem !important;
}

.pr-3,
.px-3 {
  padding-right: 0.9375rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 0.9375rem !important;
}

.pl-3,
.px-3 {
  padding-left: 0.9375rem !important;
}

.p-4 {
  padding: 1.25rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.25rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.25rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.25rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.25rem !important;
}

.p-5 {
  padding: 1.5625rem !important;
}

.pt-5,
.py-5 {
  padding-top: 1.5625rem !important;
}

.pr-5,
.px-5 {
  padding-right: 1.5625rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 1.5625rem !important;
}

.pl-5,
.px-5 {
  padding-left: 1.5625rem !important;
}

.p-6 {
  padding: 1.875rem !important;
}

.pt-6,
.py-6 {
  padding-top: 1.875rem !important;
}

.pr-6,
.px-6 {
  padding-right: 1.875rem !important;
}

.pb-6,
.py-6 {
  padding-bottom: 1.875rem !important;
}

.pl-6,
.px-6 {
  padding-left: 1.875rem !important;
}

.p-7 {
  padding: 3.125rem !important;
}

.pt-7,
.py-7 {
  padding-top: 3.125rem !important;
}

.pr-7,
.px-7 {
  padding-right: 3.125rem !important;
}

.pb-7,
.py-7 {
  padding-bottom: 3.125rem !important;
}

.pl-7,
.px-7 {
  padding-left: 3.125rem !important;
}

.p-8 {
  padding: 4.0625rem !important;
}

.pt-8,
.py-8 {
  padding-top: 4.0625rem !important;
}

.pr-8,
.px-8 {
  padding-right: 4.0625rem !important;
}

.pb-8,
.py-8 {
  padding-bottom: 4.0625rem !important;
}

.pl-8,
.px-8 {
  padding-left: 4.0625rem !important;
}

.m-n1 {
  margin: -0.3125rem !important;
}

.mt-n1,
.my-n1 {
  margin-top: -0.3125rem !important;
}

.mr-n1,
.mx-n1 {
  margin-right: -0.3125rem !important;
}

.mb-n1,
.my-n1 {
  margin-bottom: -0.3125rem !important;
}

.ml-n1,
.mx-n1 {
  margin-left: -0.3125rem !important;
}

.m-n2 {
  margin: -0.625rem !important;
}

.mt-n2,
.my-n2 {
  margin-top: -0.625rem !important;
}

.mr-n2,
.mx-n2 {
  margin-right: -0.625rem !important;
}

.mb-n2,
.my-n2 {
  margin-bottom: -0.625rem !important;
}

.ml-n2,
.mx-n2 {
  margin-left: -0.625rem !important;
}

.m-n3 {
  margin: -0.9375rem !important;
}

.mt-n3,
.my-n3 {
  margin-top: -0.9375rem !important;
}

.mr-n3,
.mx-n3 {
  margin-right: -0.9375rem !important;
}

.mb-n3,
.my-n3 {
  margin-bottom: -0.9375rem !important;
}

.ml-n3,
.mx-n3 {
  margin-left: -0.9375rem !important;
}

.m-n4 {
  margin: -1.25rem !important;
}

.mt-n4,
.my-n4 {
  margin-top: -1.25rem !important;
}

.mr-n4,
.mx-n4 {
  margin-right: -1.25rem !important;
}

.mb-n4,
.my-n4 {
  margin-bottom: -1.25rem !important;
}

.ml-n4,
.mx-n4 {
  margin-left: -1.25rem !important;
}

.m-n5 {
  margin: -1.5625rem !important;
}

.mt-n5,
.my-n5 {
  margin-top: -1.5625rem !important;
}

.mr-n5,
.mx-n5 {
  margin-right: -1.5625rem !important;
}

.mb-n5,
.my-n5 {
  margin-bottom: -1.5625rem !important;
}

.ml-n5,
.mx-n5 {
  margin-left: -1.5625rem !important;
}

.m-n6 {
  margin: -1.875rem !important;
}

.mt-n6,
.my-n6 {
  margin-top: -1.875rem !important;
}

.mr-n6,
.mx-n6 {
  margin-right: -1.875rem !important;
}

.mb-n6,
.my-n6 {
  margin-bottom: -1.875rem !important;
}

.ml-n6,
.mx-n6 {
  margin-left: -1.875rem !important;
}

.m-n7 {
  margin: -3.125rem !important;
}

.mt-n7,
.my-n7 {
  margin-top: -3.125rem !important;
}

.mr-n7,
.mx-n7 {
  margin-right: -3.125rem !important;
}

.mb-n7,
.my-n7 {
  margin-bottom: -3.125rem !important;
}

.ml-n7,
.mx-n7 {
  margin-left: -3.125rem !important;
}

.m-n8 {
  margin: -4.0625rem !important;
}

.mt-n8,
.my-n8 {
  margin-top: -4.0625rem !important;
}

.mr-n8,
.mx-n8 {
  margin-right: -4.0625rem !important;
}

.mb-n8,
.my-n8 {
  margin-bottom: -4.0625rem !important;
}

.ml-n8,
.mx-n8 {
  margin-left: -4.0625rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.3125rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.3125rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.3125rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.3125rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.3125rem !important;
  }
  .m-sm-2 {
    margin: 0.625rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.625rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.625rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.625rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.625rem !important;
  }
  .m-sm-3 {
    margin: 0.9375rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 0.9375rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 0.9375rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 0.9375rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 0.9375rem !important;
  }
  .m-sm-4 {
    margin: 1.25rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.25rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.25rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.25rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.25rem !important;
  }
  .m-sm-5 {
    margin: 1.5625rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 1.5625rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 1.5625rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 1.5625rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 1.5625rem !important;
  }
  .m-sm-6 {
    margin: 1.875rem !important;
  }
  .mt-sm-6,
  .my-sm-6 {
    margin-top: 1.875rem !important;
  }
  .mr-sm-6,
  .mx-sm-6 {
    margin-right: 1.875rem !important;
  }
  .mb-sm-6,
  .my-sm-6 {
    margin-bottom: 1.875rem !important;
  }
  .ml-sm-6,
  .mx-sm-6 {
    margin-left: 1.875rem !important;
  }
  .m-sm-7 {
    margin: 3.125rem !important;
  }
  .mt-sm-7,
  .my-sm-7 {
    margin-top: 3.125rem !important;
  }
  .mr-sm-7,
  .mx-sm-7 {
    margin-right: 3.125rem !important;
  }
  .mb-sm-7,
  .my-sm-7 {
    margin-bottom: 3.125rem !important;
  }
  .ml-sm-7,
  .mx-sm-7 {
    margin-left: 3.125rem !important;
  }
  .m-sm-8 {
    margin: 4.0625rem !important;
  }
  .mt-sm-8,
  .my-sm-8 {
    margin-top: 4.0625rem !important;
  }
  .mr-sm-8,
  .mx-sm-8 {
    margin-right: 4.0625rem !important;
  }
  .mb-sm-8,
  .my-sm-8 {
    margin-bottom: 4.0625rem !important;
  }
  .ml-sm-8,
  .mx-sm-8 {
    margin-left: 4.0625rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.3125rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.3125rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.3125rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.3125rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.3125rem !important;
  }
  .p-sm-2 {
    padding: 0.625rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.625rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.625rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.625rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.625rem !important;
  }
  .p-sm-3 {
    padding: 0.9375rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 0.9375rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 0.9375rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 0.9375rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 0.9375rem !important;
  }
  .p-sm-4 {
    padding: 1.25rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.25rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.25rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.25rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.25rem !important;
  }
  .p-sm-5 {
    padding: 1.5625rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 1.5625rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 1.5625rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 1.5625rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 1.5625rem !important;
  }
  .p-sm-6 {
    padding: 1.875rem !important;
  }
  .pt-sm-6,
  .py-sm-6 {
    padding-top: 1.875rem !important;
  }
  .pr-sm-6,
  .px-sm-6 {
    padding-right: 1.875rem !important;
  }
  .pb-sm-6,
  .py-sm-6 {
    padding-bottom: 1.875rem !important;
  }
  .pl-sm-6,
  .px-sm-6 {
    padding-left: 1.875rem !important;
  }
  .p-sm-7 {
    padding: 3.125rem !important;
  }
  .pt-sm-7,
  .py-sm-7 {
    padding-top: 3.125rem !important;
  }
  .pr-sm-7,
  .px-sm-7 {
    padding-right: 3.125rem !important;
  }
  .pb-sm-7,
  .py-sm-7 {
    padding-bottom: 3.125rem !important;
  }
  .pl-sm-7,
  .px-sm-7 {
    padding-left: 3.125rem !important;
  }
  .p-sm-8 {
    padding: 4.0625rem !important;
  }
  .pt-sm-8,
  .py-sm-8 {
    padding-top: 4.0625rem !important;
  }
  .pr-sm-8,
  .px-sm-8 {
    padding-right: 4.0625rem !important;
  }
  .pb-sm-8,
  .py-sm-8 {
    padding-bottom: 4.0625rem !important;
  }
  .pl-sm-8,
  .px-sm-8 {
    padding-left: 4.0625rem !important;
  }
  .m-sm-n1 {
    margin: -0.3125rem !important;
  }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.3125rem !important;
  }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.3125rem !important;
  }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.3125rem !important;
  }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.3125rem !important;
  }
  .m-sm-n2 {
    margin: -0.625rem !important;
  }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.625rem !important;
  }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.625rem !important;
  }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.625rem !important;
  }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.625rem !important;
  }
  .m-sm-n3 {
    margin: -0.9375rem !important;
  }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -0.9375rem !important;
  }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -0.9375rem !important;
  }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -0.9375rem !important;
  }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -0.9375rem !important;
  }
  .m-sm-n4 {
    margin: -1.25rem !important;
  }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.25rem !important;
  }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.25rem !important;
  }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.25rem !important;
  }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.25rem !important;
  }
  .m-sm-n5 {
    margin: -1.5625rem !important;
  }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -1.5625rem !important;
  }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -1.5625rem !important;
  }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -1.5625rem !important;
  }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -1.5625rem !important;
  }
  .m-sm-n6 {
    margin: -1.875rem !important;
  }
  .mt-sm-n6,
  .my-sm-n6 {
    margin-top: -1.875rem !important;
  }
  .mr-sm-n6,
  .mx-sm-n6 {
    margin-right: -1.875rem !important;
  }
  .mb-sm-n6,
  .my-sm-n6 {
    margin-bottom: -1.875rem !important;
  }
  .ml-sm-n6,
  .mx-sm-n6 {
    margin-left: -1.875rem !important;
  }
  .m-sm-n7 {
    margin: -3.125rem !important;
  }
  .mt-sm-n7,
  .my-sm-n7 {
    margin-top: -3.125rem !important;
  }
  .mr-sm-n7,
  .mx-sm-n7 {
    margin-right: -3.125rem !important;
  }
  .mb-sm-n7,
  .my-sm-n7 {
    margin-bottom: -3.125rem !important;
  }
  .ml-sm-n7,
  .mx-sm-n7 {
    margin-left: -3.125rem !important;
  }
  .m-sm-n8 {
    margin: -4.0625rem !important;
  }
  .mt-sm-n8,
  .my-sm-n8 {
    margin-top: -4.0625rem !important;
  }
  .mr-sm-n8,
  .mx-sm-n8 {
    margin-right: -4.0625rem !important;
  }
  .mb-sm-n8,
  .my-sm-n8 {
    margin-bottom: -4.0625rem !important;
  }
  .ml-sm-n8,
  .mx-sm-n8 {
    margin-left: -4.0625rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.3125rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.3125rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.3125rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.3125rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.3125rem !important;
  }
  .m-md-2 {
    margin: 0.625rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.625rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.625rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.625rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.625rem !important;
  }
  .m-md-3 {
    margin: 0.9375rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 0.9375rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 0.9375rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 0.9375rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 0.9375rem !important;
  }
  .m-md-4 {
    margin: 1.25rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.25rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.25rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.25rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.25rem !important;
  }
  .m-md-5 {
    margin: 1.5625rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 1.5625rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 1.5625rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 1.5625rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 1.5625rem !important;
  }
  .m-md-6 {
    margin: 1.875rem !important;
  }
  .mt-md-6,
  .my-md-6 {
    margin-top: 1.875rem !important;
  }
  .mr-md-6,
  .mx-md-6 {
    margin-right: 1.875rem !important;
  }
  .mb-md-6,
  .my-md-6 {
    margin-bottom: 1.875rem !important;
  }
  .ml-md-6,
  .mx-md-6 {
    margin-left: 1.875rem !important;
  }
  .m-md-7 {
    margin: 3.125rem !important;
  }
  .mt-md-7,
  .my-md-7 {
    margin-top: 3.125rem !important;
  }
  .mr-md-7,
  .mx-md-7 {
    margin-right: 3.125rem !important;
  }
  .mb-md-7,
  .my-md-7 {
    margin-bottom: 3.125rem !important;
  }
  .ml-md-7,
  .mx-md-7 {
    margin-left: 3.125rem !important;
  }
  .m-md-8 {
    margin: 4.0625rem !important;
  }
  .mt-md-8,
  .my-md-8 {
    margin-top: 4.0625rem !important;
  }
  .mr-md-8,
  .mx-md-8 {
    margin-right: 4.0625rem !important;
  }
  .mb-md-8,
  .my-md-8 {
    margin-bottom: 4.0625rem !important;
  }
  .ml-md-8,
  .mx-md-8 {
    margin-left: 4.0625rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.3125rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.3125rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.3125rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.3125rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.3125rem !important;
  }
  .p-md-2 {
    padding: 0.625rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.625rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.625rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.625rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.625rem !important;
  }
  .p-md-3 {
    padding: 0.9375rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 0.9375rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 0.9375rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 0.9375rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 0.9375rem !important;
  }
  .p-md-4 {
    padding: 1.25rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.25rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.25rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.25rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.25rem !important;
  }
  .p-md-5 {
    padding: 1.5625rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 1.5625rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 1.5625rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 1.5625rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 1.5625rem !important;
  }
  .p-md-6 {
    padding: 1.875rem !important;
  }
  .pt-md-6,
  .py-md-6 {
    padding-top: 1.875rem !important;
  }
  .pr-md-6,
  .px-md-6 {
    padding-right: 1.875rem !important;
  }
  .pb-md-6,
  .py-md-6 {
    padding-bottom: 1.875rem !important;
  }
  .pl-md-6,
  .px-md-6 {
    padding-left: 1.875rem !important;
  }
  .p-md-7 {
    padding: 3.125rem !important;
  }
  .pt-md-7,
  .py-md-7 {
    padding-top: 3.125rem !important;
  }
  .pr-md-7,
  .px-md-7 {
    padding-right: 3.125rem !important;
  }
  .pb-md-7,
  .py-md-7 {
    padding-bottom: 3.125rem !important;
  }
  .pl-md-7,
  .px-md-7 {
    padding-left: 3.125rem !important;
  }
  .p-md-8 {
    padding: 4.0625rem !important;
  }
  .pt-md-8,
  .py-md-8 {
    padding-top: 4.0625rem !important;
  }
  .pr-md-8,
  .px-md-8 {
    padding-right: 4.0625rem !important;
  }
  .pb-md-8,
  .py-md-8 {
    padding-bottom: 4.0625rem !important;
  }
  .pl-md-8,
  .px-md-8 {
    padding-left: 4.0625rem !important;
  }
  .m-md-n1 {
    margin: -0.3125rem !important;
  }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.3125rem !important;
  }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.3125rem !important;
  }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.3125rem !important;
  }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.3125rem !important;
  }
  .m-md-n2 {
    margin: -0.625rem !important;
  }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.625rem !important;
  }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.625rem !important;
  }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.625rem !important;
  }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.625rem !important;
  }
  .m-md-n3 {
    margin: -0.9375rem !important;
  }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -0.9375rem !important;
  }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -0.9375rem !important;
  }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -0.9375rem !important;
  }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -0.9375rem !important;
  }
  .m-md-n4 {
    margin: -1.25rem !important;
  }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.25rem !important;
  }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.25rem !important;
  }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.25rem !important;
  }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.25rem !important;
  }
  .m-md-n5 {
    margin: -1.5625rem !important;
  }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -1.5625rem !important;
  }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -1.5625rem !important;
  }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -1.5625rem !important;
  }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -1.5625rem !important;
  }
  .m-md-n6 {
    margin: -1.875rem !important;
  }
  .mt-md-n6,
  .my-md-n6 {
    margin-top: -1.875rem !important;
  }
  .mr-md-n6,
  .mx-md-n6 {
    margin-right: -1.875rem !important;
  }
  .mb-md-n6,
  .my-md-n6 {
    margin-bottom: -1.875rem !important;
  }
  .ml-md-n6,
  .mx-md-n6 {
    margin-left: -1.875rem !important;
  }
  .m-md-n7 {
    margin: -3.125rem !important;
  }
  .mt-md-n7,
  .my-md-n7 {
    margin-top: -3.125rem !important;
  }
  .mr-md-n7,
  .mx-md-n7 {
    margin-right: -3.125rem !important;
  }
  .mb-md-n7,
  .my-md-n7 {
    margin-bottom: -3.125rem !important;
  }
  .ml-md-n7,
  .mx-md-n7 {
    margin-left: -3.125rem !important;
  }
  .m-md-n8 {
    margin: -4.0625rem !important;
  }
  .mt-md-n8,
  .my-md-n8 {
    margin-top: -4.0625rem !important;
  }
  .mr-md-n8,
  .mx-md-n8 {
    margin-right: -4.0625rem !important;
  }
  .mb-md-n8,
  .my-md-n8 {
    margin-bottom: -4.0625rem !important;
  }
  .ml-md-n8,
  .mx-md-n8 {
    margin-left: -4.0625rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.3125rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.3125rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.3125rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.3125rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.3125rem !important;
  }
  .m-lg-2 {
    margin: 0.625rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.625rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.625rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.625rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.625rem !important;
  }
  .m-lg-3 {
    margin: 0.9375rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 0.9375rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 0.9375rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 0.9375rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 0.9375rem !important;
  }
  .m-lg-4 {
    margin: 1.25rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.25rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.25rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.25rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.25rem !important;
  }
  .m-lg-5 {
    margin: 1.5625rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 1.5625rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 1.5625rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 1.5625rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 1.5625rem !important;
  }
  .m-lg-6 {
    margin: 1.875rem !important;
  }
  .mt-lg-6,
  .my-lg-6 {
    margin-top: 1.875rem !important;
  }
  .mr-lg-6,
  .mx-lg-6 {
    margin-right: 1.875rem !important;
  }
  .mb-lg-6,
  .my-lg-6 {
    margin-bottom: 1.875rem !important;
  }
  .ml-lg-6,
  .mx-lg-6 {
    margin-left: 1.875rem !important;
  }
  .m-lg-7 {
    margin: 3.125rem !important;
  }
  .mt-lg-7,
  .my-lg-7 {
    margin-top: 3.125rem !important;
  }
  .mr-lg-7,
  .mx-lg-7 {
    margin-right: 3.125rem !important;
  }
  .mb-lg-7,
  .my-lg-7 {
    margin-bottom: 3.125rem !important;
  }
  .ml-lg-7,
  .mx-lg-7 {
    margin-left: 3.125rem !important;
  }
  .m-lg-8 {
    margin: 4.0625rem !important;
  }
  .mt-lg-8,
  .my-lg-8 {
    margin-top: 4.0625rem !important;
  }
  .mr-lg-8,
  .mx-lg-8 {
    margin-right: 4.0625rem !important;
  }
  .mb-lg-8,
  .my-lg-8 {
    margin-bottom: 4.0625rem !important;
  }
  .ml-lg-8,
  .mx-lg-8 {
    margin-left: 4.0625rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.3125rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.3125rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.3125rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.3125rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.3125rem !important;
  }
  .p-lg-2 {
    padding: 0.625rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.625rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.625rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.625rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.625rem !important;
  }
  .p-lg-3 {
    padding: 0.9375rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 0.9375rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 0.9375rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 0.9375rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 0.9375rem !important;
  }
  .p-lg-4 {
    padding: 1.25rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.25rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.25rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.25rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.25rem !important;
  }
  .p-lg-5 {
    padding: 1.5625rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 1.5625rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 1.5625rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 1.5625rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 1.5625rem !important;
  }
  .p-lg-6 {
    padding: 1.875rem !important;
  }
  .pt-lg-6,
  .py-lg-6 {
    padding-top: 1.875rem !important;
  }
  .pr-lg-6,
  .px-lg-6 {
    padding-right: 1.875rem !important;
  }
  .pb-lg-6,
  .py-lg-6 {
    padding-bottom: 1.875rem !important;
  }
  .pl-lg-6,
  .px-lg-6 {
    padding-left: 1.875rem !important;
  }
  .p-lg-7 {
    padding: 3.125rem !important;
  }
  .pt-lg-7,
  .py-lg-7 {
    padding-top: 3.125rem !important;
  }
  .pr-lg-7,
  .px-lg-7 {
    padding-right: 3.125rem !important;
  }
  .pb-lg-7,
  .py-lg-7 {
    padding-bottom: 3.125rem !important;
  }
  .pl-lg-7,
  .px-lg-7 {
    padding-left: 3.125rem !important;
  }
  .p-lg-8 {
    padding: 4.0625rem !important;
  }
  .pt-lg-8,
  .py-lg-8 {
    padding-top: 4.0625rem !important;
  }
  .pr-lg-8,
  .px-lg-8 {
    padding-right: 4.0625rem !important;
  }
  .pb-lg-8,
  .py-lg-8 {
    padding-bottom: 4.0625rem !important;
  }
  .pl-lg-8,
  .px-lg-8 {
    padding-left: 4.0625rem !important;
  }
  .m-lg-n1 {
    margin: -0.3125rem !important;
  }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.3125rem !important;
  }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.3125rem !important;
  }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.3125rem !important;
  }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.3125rem !important;
  }
  .m-lg-n2 {
    margin: -0.625rem !important;
  }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.625rem !important;
  }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.625rem !important;
  }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.625rem !important;
  }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.625rem !important;
  }
  .m-lg-n3 {
    margin: -0.9375rem !important;
  }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -0.9375rem !important;
  }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -0.9375rem !important;
  }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -0.9375rem !important;
  }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -0.9375rem !important;
  }
  .m-lg-n4 {
    margin: -1.25rem !important;
  }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.25rem !important;
  }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.25rem !important;
  }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.25rem !important;
  }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.25rem !important;
  }
  .m-lg-n5 {
    margin: -1.5625rem !important;
  }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -1.5625rem !important;
  }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -1.5625rem !important;
  }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -1.5625rem !important;
  }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -1.5625rem !important;
  }
  .m-lg-n6 {
    margin: -1.875rem !important;
  }
  .mt-lg-n6,
  .my-lg-n6 {
    margin-top: -1.875rem !important;
  }
  .mr-lg-n6,
  .mx-lg-n6 {
    margin-right: -1.875rem !important;
  }
  .mb-lg-n6,
  .my-lg-n6 {
    margin-bottom: -1.875rem !important;
  }
  .ml-lg-n6,
  .mx-lg-n6 {
    margin-left: -1.875rem !important;
  }
  .m-lg-n7 {
    margin: -3.125rem !important;
  }
  .mt-lg-n7,
  .my-lg-n7 {
    margin-top: -3.125rem !important;
  }
  .mr-lg-n7,
  .mx-lg-n7 {
    margin-right: -3.125rem !important;
  }
  .mb-lg-n7,
  .my-lg-n7 {
    margin-bottom: -3.125rem !important;
  }
  .ml-lg-n7,
  .mx-lg-n7 {
    margin-left: -3.125rem !important;
  }
  .m-lg-n8 {
    margin: -4.0625rem !important;
  }
  .mt-lg-n8,
  .my-lg-n8 {
    margin-top: -4.0625rem !important;
  }
  .mr-lg-n8,
  .mx-lg-n8 {
    margin-right: -4.0625rem !important;
  }
  .mb-lg-n8,
  .my-lg-n8 {
    margin-bottom: -4.0625rem !important;
  }
  .ml-lg-n8,
  .mx-lg-n8 {
    margin-left: -4.0625rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.3125rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.3125rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.3125rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.3125rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.3125rem !important;
  }
  .m-xl-2 {
    margin: 0.625rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.625rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.625rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.625rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.625rem !important;
  }
  .m-xl-3 {
    margin: 0.9375rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 0.9375rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 0.9375rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 0.9375rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 0.9375rem !important;
  }
  .m-xl-4 {
    margin: 1.25rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.25rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.25rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.25rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.25rem !important;
  }
  .m-xl-5 {
    margin: 1.5625rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 1.5625rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 1.5625rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 1.5625rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 1.5625rem !important;
  }
  .m-xl-6 {
    margin: 1.875rem !important;
  }
  .mt-xl-6,
  .my-xl-6 {
    margin-top: 1.875rem !important;
  }
  .mr-xl-6,
  .mx-xl-6 {
    margin-right: 1.875rem !important;
  }
  .mb-xl-6,
  .my-xl-6 {
    margin-bottom: 1.875rem !important;
  }
  .ml-xl-6,
  .mx-xl-6 {
    margin-left: 1.875rem !important;
  }
  .m-xl-7 {
    margin: 3.125rem !important;
  }
  .mt-xl-7,
  .my-xl-7 {
    margin-top: 3.125rem !important;
  }
  .mr-xl-7,
  .mx-xl-7 {
    margin-right: 3.125rem !important;
  }
  .mb-xl-7,
  .my-xl-7 {
    margin-bottom: 3.125rem !important;
  }
  .ml-xl-7,
  .mx-xl-7 {
    margin-left: 3.125rem !important;
  }
  .m-xl-8 {
    margin: 4.0625rem !important;
  }
  .mt-xl-8,
  .my-xl-8 {
    margin-top: 4.0625rem !important;
  }
  .mr-xl-8,
  .mx-xl-8 {
    margin-right: 4.0625rem !important;
  }
  .mb-xl-8,
  .my-xl-8 {
    margin-bottom: 4.0625rem !important;
  }
  .ml-xl-8,
  .mx-xl-8 {
    margin-left: 4.0625rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.3125rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.3125rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.3125rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.3125rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.3125rem !important;
  }
  .p-xl-2 {
    padding: 0.625rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.625rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.625rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.625rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.625rem !important;
  }
  .p-xl-3 {
    padding: 0.9375rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 0.9375rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 0.9375rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 0.9375rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 0.9375rem !important;
  }
  .p-xl-4 {
    padding: 1.25rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.25rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.25rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.25rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.25rem !important;
  }
  .p-xl-5 {
    padding: 1.5625rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 1.5625rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 1.5625rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 1.5625rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 1.5625rem !important;
  }
  .p-xl-6 {
    padding: 1.875rem !important;
  }
  .pt-xl-6,
  .py-xl-6 {
    padding-top: 1.875rem !important;
  }
  .pr-xl-6,
  .px-xl-6 {
    padding-right: 1.875rem !important;
  }
  .pb-xl-6,
  .py-xl-6 {
    padding-bottom: 1.875rem !important;
  }
  .pl-xl-6,
  .px-xl-6 {
    padding-left: 1.875rem !important;
  }
  .p-xl-7 {
    padding: 3.125rem !important;
  }
  .pt-xl-7,
  .py-xl-7 {
    padding-top: 3.125rem !important;
  }
  .pr-xl-7,
  .px-xl-7 {
    padding-right: 3.125rem !important;
  }
  .pb-xl-7,
  .py-xl-7 {
    padding-bottom: 3.125rem !important;
  }
  .pl-xl-7,
  .px-xl-7 {
    padding-left: 3.125rem !important;
  }
  .p-xl-8 {
    padding: 4.0625rem !important;
  }
  .pt-xl-8,
  .py-xl-8 {
    padding-top: 4.0625rem !important;
  }
  .pr-xl-8,
  .px-xl-8 {
    padding-right: 4.0625rem !important;
  }
  .pb-xl-8,
  .py-xl-8 {
    padding-bottom: 4.0625rem !important;
  }
  .pl-xl-8,
  .px-xl-8 {
    padding-left: 4.0625rem !important;
  }
  .m-xl-n1 {
    margin: -0.3125rem !important;
  }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.3125rem !important;
  }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.3125rem !important;
  }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.3125rem !important;
  }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.3125rem !important;
  }
  .m-xl-n2 {
    margin: -0.625rem !important;
  }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.625rem !important;
  }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.625rem !important;
  }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.625rem !important;
  }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.625rem !important;
  }
  .m-xl-n3 {
    margin: -0.9375rem !important;
  }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -0.9375rem !important;
  }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -0.9375rem !important;
  }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -0.9375rem !important;
  }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -0.9375rem !important;
  }
  .m-xl-n4 {
    margin: -1.25rem !important;
  }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.25rem !important;
  }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.25rem !important;
  }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.25rem !important;
  }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.25rem !important;
  }
  .m-xl-n5 {
    margin: -1.5625rem !important;
  }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -1.5625rem !important;
  }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -1.5625rem !important;
  }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -1.5625rem !important;
  }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -1.5625rem !important;
  }
  .m-xl-n6 {
    margin: -1.875rem !important;
  }
  .mt-xl-n6,
  .my-xl-n6 {
    margin-top: -1.875rem !important;
  }
  .mr-xl-n6,
  .mx-xl-n6 {
    margin-right: -1.875rem !important;
  }
  .mb-xl-n6,
  .my-xl-n6 {
    margin-bottom: -1.875rem !important;
  }
  .ml-xl-n6,
  .mx-xl-n6 {
    margin-left: -1.875rem !important;
  }
  .m-xl-n7 {
    margin: -3.125rem !important;
  }
  .mt-xl-n7,
  .my-xl-n7 {
    margin-top: -3.125rem !important;
  }
  .mr-xl-n7,
  .mx-xl-n7 {
    margin-right: -3.125rem !important;
  }
  .mb-xl-n7,
  .my-xl-n7 {
    margin-bottom: -3.125rem !important;
  }
  .ml-xl-n7,
  .mx-xl-n7 {
    margin-left: -3.125rem !important;
  }
  .m-xl-n8 {
    margin: -4.0625rem !important;
  }
  .mt-xl-n8,
  .my-xl-n8 {
    margin-top: -4.0625rem !important;
  }
  .mr-xl-n8,
  .mx-xl-n8 {
    margin-right: -4.0625rem !important;
  }
  .mb-xl-n8,
  .my-xl-n8 {
    margin-bottom: -4.0625rem !important;
  }
  .ml-xl-n8,
  .mx-xl-n8 {
    margin-left: -4.0625rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}
@media (min-width: 1500px) {
  .m-xxl-0 {
    margin: 0 !important;
  }
  .mt-xxl-0,
  .my-xxl-0 {
    margin-top: 0 !important;
  }
  .mr-xxl-0,
  .mx-xxl-0 {
    margin-right: 0 !important;
  }
  .mb-xxl-0,
  .my-xxl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xxl-0,
  .mx-xxl-0 {
    margin-left: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.3125rem !important;
  }
  .mt-xxl-1,
  .my-xxl-1 {
    margin-top: 0.3125rem !important;
  }
  .mr-xxl-1,
  .mx-xxl-1 {
    margin-right: 0.3125rem !important;
  }
  .mb-xxl-1,
  .my-xxl-1 {
    margin-bottom: 0.3125rem !important;
  }
  .ml-xxl-1,
  .mx-xxl-1 {
    margin-left: 0.3125rem !important;
  }
  .m-xxl-2 {
    margin: 0.625rem !important;
  }
  .mt-xxl-2,
  .my-xxl-2 {
    margin-top: 0.625rem !important;
  }
  .mr-xxl-2,
  .mx-xxl-2 {
    margin-right: 0.625rem !important;
  }
  .mb-xxl-2,
  .my-xxl-2 {
    margin-bottom: 0.625rem !important;
  }
  .ml-xxl-2,
  .mx-xxl-2 {
    margin-left: 0.625rem !important;
  }
  .m-xxl-3 {
    margin: 0.9375rem !important;
  }
  .mt-xxl-3,
  .my-xxl-3 {
    margin-top: 0.9375rem !important;
  }
  .mr-xxl-3,
  .mx-xxl-3 {
    margin-right: 0.9375rem !important;
  }
  .mb-xxl-3,
  .my-xxl-3 {
    margin-bottom: 0.9375rem !important;
  }
  .ml-xxl-3,
  .mx-xxl-3 {
    margin-left: 0.9375rem !important;
  }
  .m-xxl-4 {
    margin: 1.25rem !important;
  }
  .mt-xxl-4,
  .my-xxl-4 {
    margin-top: 1.25rem !important;
  }
  .mr-xxl-4,
  .mx-xxl-4 {
    margin-right: 1.25rem !important;
  }
  .mb-xxl-4,
  .my-xxl-4 {
    margin-bottom: 1.25rem !important;
  }
  .ml-xxl-4,
  .mx-xxl-4 {
    margin-left: 1.25rem !important;
  }
  .m-xxl-5 {
    margin: 1.5625rem !important;
  }
  .mt-xxl-5,
  .my-xxl-5 {
    margin-top: 1.5625rem !important;
  }
  .mr-xxl-5,
  .mx-xxl-5 {
    margin-right: 1.5625rem !important;
  }
  .mb-xxl-5,
  .my-xxl-5 {
    margin-bottom: 1.5625rem !important;
  }
  .ml-xxl-5,
  .mx-xxl-5 {
    margin-left: 1.5625rem !important;
  }
  .m-xxl-6 {
    margin: 1.875rem !important;
  }
  .mt-xxl-6,
  .my-xxl-6 {
    margin-top: 1.875rem !important;
  }
  .mr-xxl-6,
  .mx-xxl-6 {
    margin-right: 1.875rem !important;
  }
  .mb-xxl-6,
  .my-xxl-6 {
    margin-bottom: 1.875rem !important;
  }
  .ml-xxl-6,
  .mx-xxl-6 {
    margin-left: 1.875rem !important;
  }
  .m-xxl-7 {
    margin: 3.125rem !important;
  }
  .mt-xxl-7,
  .my-xxl-7 {
    margin-top: 3.125rem !important;
  }
  .mr-xxl-7,
  .mx-xxl-7 {
    margin-right: 3.125rem !important;
  }
  .mb-xxl-7,
  .my-xxl-7 {
    margin-bottom: 3.125rem !important;
  }
  .ml-xxl-7,
  .mx-xxl-7 {
    margin-left: 3.125rem !important;
  }
  .m-xxl-8 {
    margin: 4.0625rem !important;
  }
  .mt-xxl-8,
  .my-xxl-8 {
    margin-top: 4.0625rem !important;
  }
  .mr-xxl-8,
  .mx-xxl-8 {
    margin-right: 4.0625rem !important;
  }
  .mb-xxl-8,
  .my-xxl-8 {
    margin-bottom: 4.0625rem !important;
  }
  .ml-xxl-8,
  .mx-xxl-8 {
    margin-left: 4.0625rem !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .pt-xxl-0,
  .py-xxl-0 {
    padding-top: 0 !important;
  }
  .pr-xxl-0,
  .px-xxl-0 {
    padding-right: 0 !important;
  }
  .pb-xxl-0,
  .py-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xxl-0,
  .px-xxl-0 {
    padding-left: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.3125rem !important;
  }
  .pt-xxl-1,
  .py-xxl-1 {
    padding-top: 0.3125rem !important;
  }
  .pr-xxl-1,
  .px-xxl-1 {
    padding-right: 0.3125rem !important;
  }
  .pb-xxl-1,
  .py-xxl-1 {
    padding-bottom: 0.3125rem !important;
  }
  .pl-xxl-1,
  .px-xxl-1 {
    padding-left: 0.3125rem !important;
  }
  .p-xxl-2 {
    padding: 0.625rem !important;
  }
  .pt-xxl-2,
  .py-xxl-2 {
    padding-top: 0.625rem !important;
  }
  .pr-xxl-2,
  .px-xxl-2 {
    padding-right: 0.625rem !important;
  }
  .pb-xxl-2,
  .py-xxl-2 {
    padding-bottom: 0.625rem !important;
  }
  .pl-xxl-2,
  .px-xxl-2 {
    padding-left: 0.625rem !important;
  }
  .p-xxl-3 {
    padding: 0.9375rem !important;
  }
  .pt-xxl-3,
  .py-xxl-3 {
    padding-top: 0.9375rem !important;
  }
  .pr-xxl-3,
  .px-xxl-3 {
    padding-right: 0.9375rem !important;
  }
  .pb-xxl-3,
  .py-xxl-3 {
    padding-bottom: 0.9375rem !important;
  }
  .pl-xxl-3,
  .px-xxl-3 {
    padding-left: 0.9375rem !important;
  }
  .p-xxl-4 {
    padding: 1.25rem !important;
  }
  .pt-xxl-4,
  .py-xxl-4 {
    padding-top: 1.25rem !important;
  }
  .pr-xxl-4,
  .px-xxl-4 {
    padding-right: 1.25rem !important;
  }
  .pb-xxl-4,
  .py-xxl-4 {
    padding-bottom: 1.25rem !important;
  }
  .pl-xxl-4,
  .px-xxl-4 {
    padding-left: 1.25rem !important;
  }
  .p-xxl-5 {
    padding: 1.5625rem !important;
  }
  .pt-xxl-5,
  .py-xxl-5 {
    padding-top: 1.5625rem !important;
  }
  .pr-xxl-5,
  .px-xxl-5 {
    padding-right: 1.5625rem !important;
  }
  .pb-xxl-5,
  .py-xxl-5 {
    padding-bottom: 1.5625rem !important;
  }
  .pl-xxl-5,
  .px-xxl-5 {
    padding-left: 1.5625rem !important;
  }
  .p-xxl-6 {
    padding: 1.875rem !important;
  }
  .pt-xxl-6,
  .py-xxl-6 {
    padding-top: 1.875rem !important;
  }
  .pr-xxl-6,
  .px-xxl-6 {
    padding-right: 1.875rem !important;
  }
  .pb-xxl-6,
  .py-xxl-6 {
    padding-bottom: 1.875rem !important;
  }
  .pl-xxl-6,
  .px-xxl-6 {
    padding-left: 1.875rem !important;
  }
  .p-xxl-7 {
    padding: 3.125rem !important;
  }
  .pt-xxl-7,
  .py-xxl-7 {
    padding-top: 3.125rem !important;
  }
  .pr-xxl-7,
  .px-xxl-7 {
    padding-right: 3.125rem !important;
  }
  .pb-xxl-7,
  .py-xxl-7 {
    padding-bottom: 3.125rem !important;
  }
  .pl-xxl-7,
  .px-xxl-7 {
    padding-left: 3.125rem !important;
  }
  .p-xxl-8 {
    padding: 4.0625rem !important;
  }
  .pt-xxl-8,
  .py-xxl-8 {
    padding-top: 4.0625rem !important;
  }
  .pr-xxl-8,
  .px-xxl-8 {
    padding-right: 4.0625rem !important;
  }
  .pb-xxl-8,
  .py-xxl-8 {
    padding-bottom: 4.0625rem !important;
  }
  .pl-xxl-8,
  .px-xxl-8 {
    padding-left: 4.0625rem !important;
  }
  .m-xxl-n1 {
    margin: -0.3125rem !important;
  }
  .mt-xxl-n1,
  .my-xxl-n1 {
    margin-top: -0.3125rem !important;
  }
  .mr-xxl-n1,
  .mx-xxl-n1 {
    margin-right: -0.3125rem !important;
  }
  .mb-xxl-n1,
  .my-xxl-n1 {
    margin-bottom: -0.3125rem !important;
  }
  .ml-xxl-n1,
  .mx-xxl-n1 {
    margin-left: -0.3125rem !important;
  }
  .m-xxl-n2 {
    margin: -0.625rem !important;
  }
  .mt-xxl-n2,
  .my-xxl-n2 {
    margin-top: -0.625rem !important;
  }
  .mr-xxl-n2,
  .mx-xxl-n2 {
    margin-right: -0.625rem !important;
  }
  .mb-xxl-n2,
  .my-xxl-n2 {
    margin-bottom: -0.625rem !important;
  }
  .ml-xxl-n2,
  .mx-xxl-n2 {
    margin-left: -0.625rem !important;
  }
  .m-xxl-n3 {
    margin: -0.9375rem !important;
  }
  .mt-xxl-n3,
  .my-xxl-n3 {
    margin-top: -0.9375rem !important;
  }
  .mr-xxl-n3,
  .mx-xxl-n3 {
    margin-right: -0.9375rem !important;
  }
  .mb-xxl-n3,
  .my-xxl-n3 {
    margin-bottom: -0.9375rem !important;
  }
  .ml-xxl-n3,
  .mx-xxl-n3 {
    margin-left: -0.9375rem !important;
  }
  .m-xxl-n4 {
    margin: -1.25rem !important;
  }
  .mt-xxl-n4,
  .my-xxl-n4 {
    margin-top: -1.25rem !important;
  }
  .mr-xxl-n4,
  .mx-xxl-n4 {
    margin-right: -1.25rem !important;
  }
  .mb-xxl-n4,
  .my-xxl-n4 {
    margin-bottom: -1.25rem !important;
  }
  .ml-xxl-n4,
  .mx-xxl-n4 {
    margin-left: -1.25rem !important;
  }
  .m-xxl-n5 {
    margin: -1.5625rem !important;
  }
  .mt-xxl-n5,
  .my-xxl-n5 {
    margin-top: -1.5625rem !important;
  }
  .mr-xxl-n5,
  .mx-xxl-n5 {
    margin-right: -1.5625rem !important;
  }
  .mb-xxl-n5,
  .my-xxl-n5 {
    margin-bottom: -1.5625rem !important;
  }
  .ml-xxl-n5,
  .mx-xxl-n5 {
    margin-left: -1.5625rem !important;
  }
  .m-xxl-n6 {
    margin: -1.875rem !important;
  }
  .mt-xxl-n6,
  .my-xxl-n6 {
    margin-top: -1.875rem !important;
  }
  .mr-xxl-n6,
  .mx-xxl-n6 {
    margin-right: -1.875rem !important;
  }
  .mb-xxl-n6,
  .my-xxl-n6 {
    margin-bottom: -1.875rem !important;
  }
  .ml-xxl-n6,
  .mx-xxl-n6 {
    margin-left: -1.875rem !important;
  }
  .m-xxl-n7 {
    margin: -3.125rem !important;
  }
  .mt-xxl-n7,
  .my-xxl-n7 {
    margin-top: -3.125rem !important;
  }
  .mr-xxl-n7,
  .mx-xxl-n7 {
    margin-right: -3.125rem !important;
  }
  .mb-xxl-n7,
  .my-xxl-n7 {
    margin-bottom: -3.125rem !important;
  }
  .ml-xxl-n7,
  .mx-xxl-n7 {
    margin-left: -3.125rem !important;
  }
  .m-xxl-n8 {
    margin: -4.0625rem !important;
  }
  .mt-xxl-n8,
  .my-xxl-n8 {
    margin-top: -4.0625rem !important;
  }
  .mr-xxl-n8,
  .mx-xxl-n8 {
    margin-right: -4.0625rem !important;
  }
  .mb-xxl-n8,
  .my-xxl-n8 {
    margin-bottom: -4.0625rem !important;
  }
  .ml-xxl-n8,
  .mx-xxl-n8 {
    margin-left: -4.0625rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mt-xxl-auto,
  .my-xxl-auto {
    margin-top: auto !important;
  }
  .mr-xxl-auto,
  .mx-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-auto,
  .my-xxl-auto {
    margin-bottom: auto !important;
  }
  .ml-xxl-auto,
  .mx-xxl-auto {
    margin-left: auto !important;
  }
}
.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1500px) {
  .text-xxl-left {
    text-align: left !important;
  }
  .text-xxl-right {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-bolder {
  font-weight: bolder !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #ffffff !important;
}

.text-primary {
  color: #9e6de0 !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #742ed3 !important;
}

.text-secondary {
  color: #fd5190 !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #fc0560 !important;
}

.text-success {
  color: #0acb8e !important;
}

a.text-success:hover, a.text-success:focus {
  color: #06825b !important;
}

.text-info {
  color: #04c7e0 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #038495 !important;
}

.text-warning {
  color: #fec400 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #b28900 !important;
}

.text-danger {
  color: #fe5461 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #fe081b !important;
}

.text-light {
  color: #f0f1f5 !important;
}

a.text-light:hover, a.text-light:focus {
  color: #c2c6d6 !important;
}

.text-dark {
  color: #31343d !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #0f1013 !important;
}

.text-info-dark {
  color: #6493fa !important;
}

a.text-info-dark:hover, a.text-info-dark:focus {
  color: #1a5ff8 !important;
}

.text-smoke {
  color: #8a909d !important;
}

a.text-smoke:hover, a.text-smoke:focus {
  color: #646a77 !important;
}

.text-body {
  color: #8a909d !important;
}

.text-muted {
  color: #6c757d !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-break: break-word !important;
  word-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #ffffff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #b6bdca !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #e5e9f2;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #e5e9f2;
  }
}
/* Border Right md */
@media (min-width: 768px) {
  .border-right-md {
    border-right: 1px solid #e5e9f2 !important;
  }
}

/* Border Right lg */
@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #e5e9f2 !important;
  }
}

/* Flex-basis */
.flex-basis-100 {
  flex-basis: 100%;
}

.bg-warning-10 {
  background-color: rgba(254, 196, 0, 0.1);
}

.bg-overlay-primary,
.bg-overlay-secondary,
.bg-overlay-success,
.bg-overlay-danger,
.bg-overlay-warning,
.bg-overlay-info,
.bg-overlay-light,
.bg-overlay-dark {
  position: relative;
  border-radius: 5px;
}
.bg-overlay-primary::before,
.bg-overlay-secondary::before,
.bg-overlay-success::before,
.bg-overlay-danger::before,
.bg-overlay-warning::before,
.bg-overlay-info::before,
.bg-overlay-light::before,
.bg-overlay-dark::before {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
}

.bg-overlay-primary::before {
  background-color: rgba(158, 109, 224, 0.9);
}

.bg-overlay-secondary::before {
  background-color: rgba(253, 81, 144, 0.9);
}

.bg-overlay-success::before {
  background-color: rgba(10, 203, 142, 0.9);
}

.bg-overlay-danger::before {
  background-color: rgba(254, 84, 97, 0.9);
}

.bg-overlay-warning::before {
  background-color: rgba(254, 196, 0, 0.9);
}

.bg-overlay-info::before {
  background-color: rgba(4, 199, 224, 0.9);
}

.bg-overlay-light::before {
  background-color: rgba(240, 241, 245, 0.9);
}

.bg-overlay-dark::before {
  background-color: rgba(49, 52, 61, 0.9);
}

.bg-overlay-black-40 {
  position: relative;
}
.bg-overlay-black-40::before {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
  background-color: rgba(0, 0, 0, 0.4);
}
.bg-overlay-black-40.rounded::before {
  border-radius: 0.25rem;
}

/*Nagetive Margin */
.mtn-50 {
  margin-top: -50px;
}

.text-color {
  color: #8a909d !important;
}

/*===== REBOOT =====*/
* {
  outline: 0;
  margin: 0;
  padding: 0;
}

html, * {
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

ul {
  margin: 0;
  padding: 0;
}
ul li {
  list-style-type: none;
}

p {
  font-weight: 400;
  margin-bottom: 0;
  font-size: 0.98rem;
}

::-moz-selection {
  background-color: #9e6de0;
  color: #ffffff;
}

::selection {
  background-color: #9e6de0;
  color: #ffffff;
}

button,
a {
  text-decoration: none;
  transition: all 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  button,
  a {
    transition: none;
  }
}
button:hover, button:focus, button:active,
a:hover,
a:focus,
a:active {
  box-shadow: none;
  outline: none;
  text-decoration: none;
}

button {
  background: transparent;
  border: none;
  cursor: pointer;
}

/*===== CUSTOM GRID =====*/
/* Body */
#body {
  position: relative;
  height: 100%;
  overflow-x: hidden;
}

/* Wrapper */
.wrapper {
  display: flex;
  align-items: stretch;
  flex: 1 1 auto;
  width: 100%;
  min-height: 100vh;
}

/* Page Wrapper */
.page-wrapper {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.content-wrapper {
  display: flex;
  flex: 1 1 auto;
  flex-direction: column;
  width: 100%;
}

/* Content */
.content {
  padding-top: 1rem;
  padding-left: 1rem;
  padding-right: 1rem;
  width: 100%;
}
@media (min-width: 992px) {
  .content {
    margin-right: auto;
    margin-left: auto;
    padding-top: 1.9rem;
    padding-left: 1.875rem;
    padding-right: 1.875rem;
  }
}
@media (min-width: 1200px) {
  .content {
    padding-top: 2.5rem;
    padding-bottom: 0.625rem;
  }
}

/* ===== BUTTONS ===== */
.btn {
  text-transform: uppercase;
  box-shadow: none !important;
  padding: 0.3125rem 1rem;
}
.btn.btn-square {
  border-radius: 0px;
}
.btn.btn-pill {
  border-radius: 20px;
}
@media (min-width: 768px) {
  .btn.btn-pill {
    border-radius: 30px;
  }
}
@media (min-width: 768px) {
  .btn {
    padding: 0.56rem 1.5rem;
  }
}

/* Button Circle */
.btn-rounded-circle {
  border-radius: 50%;
}

/* Button Icon */
.btn-icon {
  width: 43px;
  height: 43px;
  padding: 0.312rem 0.625rem;
  color: #ffffff;
  font-size: 1.25rem;
}
.btn-icon:hover {
  color: #ffffff;
}

/* Button Refress */
.btn-refress {
  background: #f0f1f5;
  padding: 0 0.375rem;
  font-size: 1.0625rem;
}

/* Social Button */
.facebook {
  background-color: #3b5999;
  color: #ffffff;
}
.facebook.btn-outline {
  border-color: rgba(59, 89, 153, 0.6);
  background-color: transparent;
  color: #3b5999;
}
.facebook.btn-outline:hover {
  background-color: #3b5999;
  color: #ffffff;
}
.facebook:hover {
  background-color: #344e87;
  color: #ffffff;
}

.twitter {
  background-color: #55acee;
  color: #ffffff;
}
.twitter.btn-outline {
  border-color: rgba(85, 172, 238, 0.6);
  background-color: transparent;
  color: #55acee;
}
.twitter.btn-outline:hover {
  background-color: #55acee;
  color: #ffffff;
}
.twitter:hover {
  background-color: #3ea1ec;
  color: #ffffff;
}

.google-plus {
  background-color: #dd4b39;
  color: #ffffff;
}
.google-plus.btn-outline {
  border-color: rgba(221, 75, 57, 0.6);
  background-color: transparent;
  color: #dd4b39;
}
.google-plus.btn-outline:hover {
  background-color: #dd4b39;
  color: #ffffff;
}
.google-plus:hover {
  background-color: #d73925;
  color: #ffffff;
}

.linkedin {
  background-color: #0077b5;
  color: #ffffff;
}
.linkedin.btn-outline {
  border-color: rgba(0, 119, 181, 0.6);
  background-color: transparent;
  color: #0077b5;
}
.linkedin.btn-outline:hover {
  background-color: #0077b5;
  color: #ffffff;
}
.linkedin:hover {
  background-color: #00669c;
  color: #ffffff;
}

.pinterest {
  background-color: #bd081c;
  color: #ffffff;
}
.pinterest.btn-outline {
  border-color: rgba(189, 8, 28, 0.6);
  background-color: transparent;
  color: #bd081c;
}
.pinterest.btn-outline:hover {
  background-color: #bd081c;
  color: #ffffff;
}
.pinterest:hover {
  background-color: #a50718;
  color: #ffffff;
}

.tumblr {
  background-color: #34465d;
  color: #ffffff;
}
.tumblr.btn-outline {
  border-color: rgba(52, 70, 93, 0.6);
  background-color: transparent;
  color: #34465d;
}
.tumblr.btn-outline:hover {
  background-color: #34465d;
  color: #ffffff;
}
.tumblr:hover {
  background-color: #2b3a4d;
  color: #ffffff;
}

.vimeo {
  background-color: #00b489;
  color: #ffffff;
}
.vimeo.btn-outline {
  border-color: rgba(0, 180, 137, 0.6);
  background-color: transparent;
  color: #00b489;
}
.vimeo.btn-outline:hover {
  background-color: #00b489;
  color: #ffffff;
}
.vimeo:hover {
  background-color: #009b76;
  color: #ffffff;
}

.dropbox {
  background-color: #007ee5;
  color: #ffffff;
}
.dropbox.btn-outline {
  border-color: rgba(0, 126, 229, 0.6);
  background-color: transparent;
  color: #007ee5;
}
.dropbox.btn-outline:hover {
  background-color: #007ee5;
  color: #ffffff;
}
.dropbox:hover {
  background-color: #0070cc;
  color: #ffffff;
}

.dribbble {
  background-color: #ea4c89;
  color: #ffffff;
}
.dribbble.btn-outline {
  border-color: rgba(234, 76, 137, 0.6);
  background-color: transparent;
  color: #ea4c89;
}
.dribbble.btn-outline:hover {
  background-color: #ea4c89;
  color: #ffffff;
}
.dribbble:hover {
  background-color: #e7357a;
  color: #ffffff;
}

.skype {
  background-color: #00aff0;
  color: #ffffff;
}
.skype.btn-outline {
  border-color: rgba(0, 175, 240, 0.6);
  background-color: transparent;
  color: #00aff0;
}
.skype.btn-outline:hover {
  background-color: #00aff0;
  color: #ffffff;
}
.skype:hover {
  background-color: #009cd7;
  color: #ffffff;
}

/* ===== Cards ===== */
/* Card Default */
.card-default {
  margin-bottom: 1rem;
}
@media (min-width: 992px) {
  .card-default {
    margin-bottom: 2rem;
  }
}
.card-default .card-header {
  padding-top: 1.875rem;
  padding-bottom: 1rem;
  display: flex;
  justify-content: space-between;
  background-color: transparent;
  border-bottom: none;
  flex-wrap: wrap;
  text-transform: capitalize;
}
.card-default .card-header h2 {
  font-size: 1.375rem;
  color: #31343d;
}
.card-default .card-header h2::before {
  line-height: 1.375rem;
  margin-right: 0.5rem;
}
.card-default .card-header .btn.mdi {
  padding: 0.125rem 0.625rem;
  font-size: 0.75rem;
  line-height: 1.5;
  border-radius: 0.2rem;
  display: flex;
  align-items: center;
  border: 1px solid #9e6de0;
  color: #9e6de0;
}
.card-default .card-header .btn.mdi:hover {
  background-color: #9e6de0;
  color: #ffffff;
}
.card-default .card-header .flex-basis-100 {
  text-transform: none;
}
.card-default .horizontal-img {
  -o-object-fit: cover;
     object-fit: cover;
  height: 100%;
  width: 100%;
  max-width: 100%;
}
.card-default .card-body {
  padding-top: 1rem;
  padding-bottom: 1.875rem;
}
.card-default .sub-title {
  color: #31343d;
  flex-basis: 100%;
}
.card-default .card-header-bg {
  height: 200px;
  background-position: top;
  background-size: cover;
  background-repeat: no-repeat;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

/* Card Mini */
.card-mini {
  margin-bottom: 1rem;
}
@media (min-width: 576px) {
  .card-mini {
    margin-bottom: 105px;
  }
}
@media (min-width: 992px) {
  .card-mini {
    margin-bottom: 115px;
  }
}
.card-mini .card-header h2 {
  font-size: 1.625rem;
}
@media (min-width: 576px) {
  .card-mini .chart-wrapper {
    position: absolute;
    top: 120px;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    padding: 0px 30px;
  }
}
@media (min-width: 576px) {
  .card-mini .card-body {
    height: 62px;
  }
}

/* Mini Stataus */
.mini-status {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 1rem;
  justify-content: space-evenly;
}
@media (min-width: 992px) {
  .mini-status {
    align-items: center;
    justify-content: unset;
  }
}
.mini-status .text-content {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  margin-right: 1.25rem;
}
.mini-status .text-content .title {
  font-size: 0.75rem;
  text-transform: uppercase;
}
@media (min-width: 1200px) {
  .mini-status .text-content .title {
    font-size: 0.9375rem;
  }
}
.mini-status .text-content .status {
  font-size: 1.25rem;
}
@media (min-width: 1200px) {
  .mini-status .text-content .status {
    font-size: 1.625rem;
  }
}

/* Accordion */
.accordion .card-header {
  padding: 0;
}
.accordion .card-header h2 {
  width: 100%;
}
.accordion .card-header h2 .btn {
  padding-left: 30px;
  background-color: #9e6de0;
  color: #ffffff;
  display: block;
  width: 100%;
  text-align: left;
  position: relative;
}
.accordion .card-header h2 .btn.collapsed {
  background-color: transparent;
  color: #31343d;
}
.accordion .card-header h2 .btn:hover, .accordion .card-header h2 .btn:focus {
  text-decoration: none;
}
.accordion .card-header h2 .btn::after {
  position: absolute;
  right: 25px;
}
.accordion .card-header h2 .btn[aria-expanded=false]:after,
.accordion .card-header h2 a[aria-expanded=false]:after {
  content: "\f415";
  font-family: "Material Design Icons";
}
.accordion .card-header h2 .btn[aria-expanded=true]:after,
.accordion .card-header h2 a[aria-expanded=true]:after {
  content: "\f374";
  font-family: "Material Design Icons";
}

/* Accordion Shadow */
.accordion-shadow .card {
  border: 0;
  box-shadow: 0px 4px 19px 0px rgba(229, 230, 235, 0.6);
  margin-bottom: 1rem;
}
.accordion-shadow .card-header h2 .btn {
  background-color: transparent;
  color: #9e6de0;
}
.accordion-shadow .card-header h2 .btn.collapsed {
  color: #31343d;
}
.accordion-shadow .card-header .btn[aria-expanded=true]:after,
.accordion-shadow .card-header a[aria-expanded=true]:after {
  color: #9e6de0;
}

.accordion-header-border-bottom .card {
  border: 0;
  margin-bottom: 1rem;
}
.accordion-header-border-bottom .card-header {
  border-bottom: 1px solid #e5e9f2;
}
.accordion-header-border-bottom .card-header h2 .btn {
  background-color: transparent;
  color: #9e6de0;
}
.accordion-header-border-bottom .card-header h2 .btn.collapsed {
  color: #31343d;
  border-bottom: 1px solid #e5e9f2;
}
.accordion-header-border-bottom .card-header .btn[aria-expanded=true]:after,
.accordion-header-border-bottom .card-header a[aria-expanded=true]:after {
  color: #9e6de0;
}

/* Card Profile */
.card-profile .card-profile-body {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 2rem 0rem;
}
@media (min-width: 1200px) {
  .card-profile .card-profile-body {
    flex-direction: row;
    justify-content: space-between;
    padding: 2rem;
  }
}
@media (min-width: 1200px) {
  .card-profile .card-profile-body .nav-profile-follow {
    width: 33.33%;
  }
}
.card-profile .card-profile-body .profile-avata {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: -6rem;
  text-align: center;
}
@media (min-width: 1200px) {
  .card-profile .card-profile-body .profile-avata {
    width: 33.33%;
    order: 2;
  }
}
@media (min-width: 1200px) {
  .card-profile .card-profile-body .profile-button {
    width: 33.33%;
    display: flex;
    order: 3;
  }
}
@media (min-width: 1200px) {
  .card-profile .card-profile-body .profile-button .btn {
    margin-left: auto;
  }
}
.card-profile .card-profile-footer {
  padding: 0.625rem 1rem;
  background-color: #ffffff;
}

/*===== CHAT =====*/
.chat-left-sidebar {
  margin-bottom: 0;
  border-bottom-color: transparent;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
@media (min-width: 992px) {
  .chat-left-sidebar {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-bottom-color: #e5e9f2;
    border-right: 0;
    margin-bottom: 2rem;
  }
}

.chat-right-sidebar {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
@media (min-width: 992px) {
  .chat-right-sidebar {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

pre {
  border-left: 4px solid #9e6de0;
  padding: 1.25rem 0.94rem;
  background: rgba(0, 0, 0, 0.05);
  border-radius: 0.19rem;
}
pre code {
  background: transparent;
  font-size: 1rem;
  color: #31343d;
}

.pre-code,
code {
  font-family: Menlo, Monaco, "Courier New", Courier, monospace;
  font-size: 1rem;
  background: rgba(0, 0, 0, 0.05);
  padding: 0.19rem 0.625rem;
  margin: 0 0.125rem;
  color: #31343d;
}

.pre-code {
  padding: 1.25rem 0.94rem !important;
}

/* ===== APEXCHARTS ===== */
/* Apexchart Canvas */
.apexcharts-canvas svg {
  border-radius: 0.3125rem;
}

/* Radial Chart Bar Footer */
.radial-bar-chart-footer {
  text-align: center;
}
.radial-bar-chart-footer .title-large {
  font-size: 1.625rem;
  color: #31343d;
}
.radial-bar-chart-footer .title-large i {
  font-size: 1.25rem;
}
.radial-bar-chart-footer .title-small {
  color: #8a909d;
}

#mixed-chart-1 .apexcharts-tooltip,
#mixed-chart-2 .apexcharts-tooltip {
  background-color: #31343d !important;
  color: #ffffff !important;
  border: none;
}

.full-calendar {
  position: relative;
}
.full-calendar .fc-header-toolbar {
  margin: 30px;
  line-height: 0;
}
@media (min-width: 1500px) {
  .full-calendar .fc-header-toolbar {
    margin: 30px 50px;
  }
}
.full-calendar .fc-toolbar {
  flex-direction: column;
  align-items: flex-start;
}
@media (min-width: 768px) {
  .full-calendar .fc-toolbar {
    flex-flow: wrap;
    align-items: center;
  }
}
.full-calendar .fc-left {
  margin-bottom: 25px;
}
@media (min-width: 768px) {
  .full-calendar .fc-left {
    margin-bottom: 0;
  }
}
.full-calendar .fc-left h2 {
  font-size: 1.25125rem;
  text-transform: capitalize;
  margin-left: 0;
}
.full-calendar .fc-view-container {
  background-color: #ffffff;
  border-radius: 0.25rem;
  border: 1px solid #ddd;
  margin: 30px;
}
@media (min-width: 1500px) {
  .full-calendar .fc-view-container {
    margin: 30px 50px 50px;
  }
}
.full-calendar thead tr {
  background-color: transparent;
  box-shadow: none;
}
.full-calendar .fc-day-header {
  padding: 10px 0;
}
.full-calendar .fc-day-header span {
  color: #000;
  font-size: 1rem;
}
.full-calendar .fc-time,
.full-calendar .fc-title {
  color: #ffffff;
}
.full-calendar .fc-day-number {
  color: #000;
}
.full-calendar .fc-time {
  font-weight: normal;
}
.full-calendar thead tr th:first-child {
  border-top-left-radius: 10px;
}
.full-calendar .fc-event {
  border: 1px solid transparent;
}
.full-calendar .fc-event, .full-calendar .fc-event-dot {
  background-color: #9e6de0;
  cursor: pointer;
}
.full-calendar .fc-button-primary {
  background-color: #ffffff;
  border-color: #ddd;
}
.full-calendar .fc-button-primary:focus {
  box-shadow: none !important;
}
.full-calendar .fc-button-primary:hover {
  background-color: transparent;
  border-color: #ddd;
}
.full-calendar .fc-icon {
  margin-top: -3px;
}
.full-calendar .fc-icon-chevron-left,
.full-calendar .fc-icon-chevron-right {
  color: #8a909d;
}
.full-calendar .fc-today-button {
  color: #ffffff;
  background-color: #9e6de0;
  border-color: #9e6de0;
  text-transform: uppercase;
}
.full-calendar .fc-today-button:focus {
  box-shadow: none !important;
}
.full-calendar .fc-today-button:hover {
  color: #9e6de0;
  background-color: #ffffff;
  border-color: #9e6de0;
}
.full-calendar .fc-button:disabled {
  opacity: 1;
}
.full-calendar .fc-button-primary:not(:disabled).fc-button-active,
.full-calendar .fc-button-primary:not(:disabled):active {
  background-color: transparent;
  border-color: #ddd;
}
.full-calendar .fc td, .full-calendar .fc th {
  border: 1px solid transparent;
}
.full-calendar .fc td {
  border-right: 1px solid #ddd;
}
.full-calendar .fc td:last-child {
  border-right-color: transparent;
}
.full-calendar .fc-row .fc-bg {
  border-top: 1px solid #ddd !important;
}
.full-calendar tbody tr {
  border-bottom: 1px solid #ddd !important;
}
.full-calendar .fc th {
  border: 1px solid #ddd;
}
.full-calendar .fc-past-event {
  background-color: #bfbfc3;
}
.full-calendar .fc-current-event .fc-time,
.full-calendar .fc-current-event .fc-title {
  font-size: 13px;
}
.full-calendar .fc-today .fc-day-number {
  background-color: #9e6de0;
  color: #ffffff;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;
}

.fc-datepicker-header {
  cursor: pointer;
}

.fc-unthemed td.fc-today {
  background-color: rgba(158, 109, 224, 0.3);
}

.ui-icon {
  top: -4px;
  left: -7px;
}

/*===== HEADER =====*/
.main-header {
  position: relative;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1020;
  margin-bottom: 0;
  padding: 0;
  transition: box-shadow 0.2s linear;
}

/* Navbar */
.navbar {
  margin-bottom: 0;
  border: none;
  min-height: 75px;
  border-radius: 0;
  padding: 0;
  border-bottom: 1px solid #c6cfe3;
  transition: margin-left 0.3s ease-in-out;
  /* Page Title */
  /* Search Form */
  /* Navbar Nav */
  /* Navbar Collapse */
  /* Navbar Right */
}
@media (prefers-reduced-motion: reduce) {
  .navbar {
    transition: none;
  }
}
@media (min-width: 992px) {
  .navbar {
    padding-right: 1rem;
  }
}
.navbar .sidebar-offcanvas-toggle,
.navbar .sidebar-toggle {
  background-color: transparent;
  background-image: none;
  color: #2f2f2f;
  font-size: 2rem;
  padding: 0 1rem;
  border: 0px;
  height: 75px;
  cursor: pointer;
}
@media (min-width: 992px) {
  .navbar .sidebar-offcanvas-toggle,
  .navbar .sidebar-toggle {
    padding: 0 1.44rem 0 1.75rem;
  }
}
.navbar .sidebar-offcanvas-toggle:before,
.navbar .sidebar-toggle:before {
  content: "\f35c";
  font-family: "Material Design Icons";
}
.navbar .page-title {
  max-width: 50px;
  text-overflow: ellipsis;
  overflow: hidden;
  text-transform: capitalize;
  color: #2f2f2f;
  font-size: 1.125rem;
  white-space: nowrap;
}
@media (min-width: 768px) {
  .navbar .page-title {
    font-size: 1.625rem;
    max-width: 150px;
  }
}
@media (min-width: 1200px) {
  .navbar .page-title {
    max-width: unset;
  }
}
.navbar .search-form {
  display: none;
  position: relative;
}
@media (min-width: 992px) {
  .navbar .search-form {
    display: block;
  }
}
.navbar .search-form .input-group {
  margin-bottom: 0;
  border-radius: 0.5rem;
  align-items: center;
  background-color: #f5f6fa;
}
.navbar .search-form .input-group .btn {
  padding: 0px 8px;
  border: 1px solid #e5e9f2;
  border-radius: 3px;
  background-color: #ffffff;
  font-size: 1rem;
  color: #31343d;
}
@media (min-width: 768px) {
  .navbar .search-form .input-group .input-group-append {
    padding-right: 0.625rem;
  }
}
.navbar .search-form .input-group input.form-control {
  border: none;
  background: transparent;
  font-size: 0.9375rem;
  padding: 1.375rem 1.25rem;
  display: none;
}
@media (min-width: 992px) {
  .navbar .search-form .input-group input.form-control {
    display: block;
    min-width: 100px;
  }
}
@media (min-width: 1500px) {
  .navbar .search-form .input-group input.form-control {
    min-width: 335px;
  }
}
.navbar .search-form .input-group input.form-control:focus {
  box-shadow: none;
}
.navbar .search-form .input-group #search-results-container {
  width: 100%;
  background: #fff;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  box-shadow: 1px 2px 5px #e5e9f2;
}
.navbar .search-form .input-group #search-results-container li {
  padding: 20px 30px;
}
.navbar .search-form .input-group #search-results-container li .link {
  font-size: 1rem;
}
@media (min-width: 1200px) {
  .navbar .search-form {
    position: relative;
    display: block;
  }
}
@media (min-width: 1200px) and (min-width: 992px) {
  .navbar .search-form {
    margin-left: 1rem;
    margin-right: 1rem;
  }
}
.navbar .navbar-nav {
  flex-wrap: nowrap;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}
@media (min-width: 768px) {
  .navbar .navbar-nav {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
@media (min-width: 992px) {
  .navbar .navbar-nav {
    align-items: center;
    padding-left: 0;
    padding-right: 0;
  }
}
@media (min-width: 1200px) {
  .navbar .navbar-nav {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
  }
}
.navbar .navbar-nav .nav-item {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
@media (min-width: 992px) {
  .navbar .navbar-nav .nav-item {
    padding-top: 1.1875rem;
    padding-bottom: 1.1875rem;
  }
}
.navbar .navbar-nav .nav-item .nav-link {
  color: #fd5190;
}
.navbar .navbar-collapse {
  order: 1;
  border-top: 1px solid #e5e9f2;
}
@media (min-width: 992px) {
  .navbar .navbar-collapse {
    order: 0;
    border-top: none;
  }
}
.navbar .navbar-right {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  margin-left: auto;
}
.navbar .navbar-right .navbar-nav {
  flex-direction: row;
  align-items: center;
}
@media (min-width: 992px) {
  .navbar .navbar-right .navbar-nav {
    padding-left: 0;
    padding-right: 0;
  }
}
@media (min-width: 1200px) {
  .navbar .navbar-right .navbar-nav {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar .navbar-right .navbar-nav .dropdown-toggle {
  padding-left: 1rem;
  padding-right: 1rem;
}
.navbar .navbar-right .navbar-nav .dropdown-toggle i {
  font-size: 1.75rem;
  color: #31343d;
}
.navbar .navbar-right .navbar-nav .dropdown-menu {
  position: absolute;
  right: 8px;
  border-color: #e5e9f2;
}
@media (min-width: 768px) {
  .navbar .navbar-right .navbar-nav .dropdown-menu {
    right: 0px;
  }
}
@media (min-width: 992px) {
  .navbar .navbar-right .navbar-nav .dropdown-menu {
    right: 15px;
  }
}
@media (min-width: 992px) {
  .navbar .navbar-right .navbar-nav .user-menu {
    min-width: 160px;
  }
}
.navbar .navbar-right .navbar-nav .user-menu .user-image {
  width: 40px;
  border-radius: 0.25rem;
}
.navbar .navbar-right .navbar-nav .user-menu .dropdown-link-item {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.navbar .navbar-right .navbar-nav .user-menu .dropdown-link-item .nav-text {
  margin-right: auto;
}
.navbar .navbar-right .navbar-nav .user-menu .dropdown-menu {
  width: 210px;
  border-radius: 5px;
}
.navbar .navbar-right .navbar-nav .user-menu .dropdown-menu li:first-child a {
  padding-top: 1.25rem;
}
.navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle {
  font-size: 0.98rem;
  padding: 0 0.5rem;
  line-height: 75px;
  display: flex;
  align-items: center;
}
.navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle > span {
  color: #2f2f2f;
  padding: 0 0.5rem;
  font-size: 1rem;
  font-weight: 700;
}
@media (min-width: 992px) {
  .navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle > span {
    text-overflow: ellipsis;
    max-width: 70px;
    overflow: hidden;
  }
}
@media (min-width: 1200px) {
  .navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle > span {
    max-width: 120px;
  }
}
@media (min-width: 1500px) {
  .navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle > span {
    max-width: 200px;
  }
}
@media (min-width: 992px) {
  .navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle {
    padding-right: 0.25rem;
    padding-left: 0.25rem;
  }
}
@media (min-width: 1200px) {
  .navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle {
    padding-right: 1rem;
    padding-left: 1rem;
  }
}
.navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle:after {
  border: none;
  font-family: "Material Design Icons";
  content: "\f140";
  vertical-align: -3px;
  font-size: 1.25rem;
  transform: rotate(0);
  transition: transform 0.3s ease-in-out;
}
@media (min-width: 768px) {
  .navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle:after {
    margin-right: -7px;
  }
}
@media (min-width: 1200px) {
  .navbar .navbar-right .navbar-nav .user-menu .dropdown-toggle:after {
    margin-right: -5px;
  }
}
.navbar .navbar-right .navbar-nav .user-menu.show .dropdown-toggle:after {
  transform: rotate(180deg);
  transition: transform 0.3s ease-in-out;
}
.navbar .dropdown-menu {
  width: 215px;
  padding: 0 0 0 0;
  margin: 0;
  top: 100%;
  border-color: transparent;
}
@media (min-width: 768px) {
  .navbar .dropdown-menu {
    width: 250px;
  }
}
@media (min-width: 992px) {
  .navbar .dropdown-menu {
    border-color: #e5e9f2;
  }
}
.navbar .dropdown-menu > li a {
  color: #8a909d;
  font-size: 0.88rem;
  padding: 0.25rem 1.25rem;
}
.navbar .dropdown-menu > li a > i {
  margin-right: 0.625rem;
  font-size: 1.25rem;
}
.navbar .dropdown-menu li.dropdown-footer {
  border-bottom-left-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  background-color: #ffffff;
  border-top: 1px solid #e5e9f2;
  margin-top: 0.625rem;
}
.navbar .dropdown-menu li.dropdown-footer > a {
  padding: 0.94rem 1.25rem;
}
.navbar .dropdown-item.active,
.navbar .dropdown-item:active {
  color: #fd5190;
  background-color: transparent;
}

@media (max-width: 767px) {
  .main-header {
    position: relative;
  }
  .main-header .logo,
  .main-header .navbar {
    width: 100%;
  }
  .main-header .navbar {
    margin: 0;
  }
}
/* Header Fix */
@media (min-width: 768px) {
  .navbar-fixed .page-wrapper {
    padding-top: 4.8125rem;
  }
}
@media (min-width: 768px) {
  .navbar-fixed .page-wrapper .main-header {
    position: fixed;
  }
}

/*  Header Dark  */
.navbar.navbar-dark {
  background-color: #1d1f26;
  border-color: transparent;
}
.navbar.navbar-dark .sidebar-toggle {
  color: #bfc7d9;
}
.navbar.navbar-dark .page-title {
  color: #bfc7d9;
}
.navbar.navbar-dark .custom-dropdown .custom-dropdown-toggler .icon {
  color: #bfc7d9;
}
.navbar.navbar-dark .navbar-right .navbar-nav .user-menu .dropdown-toggle > span {
  color: #bfc7d9;
}
.navbar.navbar-dark .navbar-right .navbar-nav .user-menu .dropdown-toggle {
  color: #bfc7d9;
}
.navbar.navbar-dark .search-form .input-group {
  background-color: #333743;
}
.navbar.navbar-dark .search-form .input-group .btn {
  background-color: #1d1f26;
  border-color: #1d1f26;
  color: #bfc7d9;
}
.navbar.navbar-dark .search-form .input-group input.form-control {
  color: #bfc7d9;
}
.navbar.navbar-dark input::-moz-placeholder {
  color: #bfc7d9;
}
.navbar.navbar-dark input::placeholder {
  color: #bfc7d9;
}

/* Header Light */
.navbar.navbar-light {
  background-color: #ffffff;
  border-color: #e5e9f2;
}
.navbar.navbar-light .sidebar-toggle {
  border-color: #e5e9f2;
}
.navbar.navbar-light .sidebar-offcanvas-toggle {
  border-color: #e5e9f2;
}
.navbar.navbar-light .search-form .btn,
.navbar.navbar-light .search-form .input-group input.form-control {
  color: #8a909d;
}
.navbar.navbar-light .navbar-right .navbar-nav .notifications-menu .dropdown-toggle {
  border-color: #e5e9f2;
}
.navbar.navbar-light .navbar-right .navbar-nav .user-menu .dropdown-toggle > span {
  color: #31343d;
}
@media (min-width: 1200px) {
  .navbar.navbar-light .search-form .input-group {
    border: 1px solid #e5e9f2;
  }
}

/* Header Primary */
.navbar.navbar-primary {
  background-color: #9e6de0;
  border-color: transparent;
}
.navbar.navbar-primary .sidebar-toggle {
  color: #ffffff;
}
.navbar.navbar-primary .page-title {
  color: #ffffff;
}
.navbar.navbar-primary .custom-dropdown .custom-dropdown-toggler .icon {
  color: #ffffff;
}
.navbar.navbar-primary .navbar-right .navbar-nav .user-menu .dropdown-toggle > span {
  color: #ffffff;
}
.navbar.navbar-primary .navbar-right .navbar-nav .user-menu .dropdown-toggle {
  color: #ffffff;
}
.navbar.navbar-primary .search-form .input-group {
  background-color: #ba97e9;
}
.navbar.navbar-primary .search-form .input-group .btn {
  background-color: #9e6de0;
  border-color: #9e6de0;
  color: #ffffff;
}
.navbar.navbar-primary .search-form .input-group input.form-control {
  color: #ffffff;
}
.navbar.navbar-primary input::-moz-placeholder {
  color: #ffffff;
}
.navbar.navbar-primary input::placeholder {
  color: #ffffff;
}

/* Navbar Transparent */
.navbar.navbar-transparent .search-form .input-group {
  background-color: #ffffff;
}
.navbar.navbar-transparent .search-form .input-group .btn {
  background-color: transparent;
  border-color: #e5e9f2;
  color: #8a909d;
}
.navbar.navbar-transparent .search-form .input-group input.form-control {
  color: #8a909d;
}
.navbar.navbar-transparent input::-moz-placeholder {
  color: #8a909d;
}
.navbar.navbar-transparent input::placeholder {
  color: #8a909d;
}

/* Cusmtom Dropdown */
.custom-dropdown {
  position: relative;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}
@media (min-width: 768px) {
  .custom-dropdown {
    padding-left: 1rem;
    padding-right: 1rem;
  }
}
.custom-dropdown .custom-dropdown-toggler .icon {
  font-size: 1.75rem;
  color: #2f2f2f;
}
.custom-dropdown .custom-dropdown-toggler .badge-xs {
  position: absolute;
  top: 4px;
  right: 8px;
  background-color: #fd5190;
  min-width: 18px;
  min-height: 18px;
  color: #ffffff;
  font-size: 0.75rem;
  font-weight: 700;
  padding: 3px 5px;
}

/* Notification */
.dropdown-notify {
  display: none;
  width: 320px;
  position: absolute;
  top: 59px;
  left: -204px;
  border-radius: 5px;
  box-shadow: 0px 1px 2px 0px rgba(28, 29, 36, 0.1), inset 0px -1px 0px 0px rgba(229, 230, 235, 0.1);
  background-color: #ffffff;
}
@media (min-width: 992px) {
  .dropdown-notify {
    left: 50%;
    transform: translateX(-50%);
  }
}
.dropdown-notify .slim-scroll-wrapper {
  height: 325px;
  overflow: hidden;
}

/*===== FORM =====*/
/* Form Control Secondary */
.form-control-secondary {
  background-color: #f5f6fa;
  font-size: 0.88rem;
}

label {
  color: #31343d;
  font-weight: 600;
}

/* Contextual Style */
.checkbox-secondary .custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  background-color: #fd5190;
  border-color: #fd5190;
}

.checkbox-success .custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  background-color: #0acb8e;
  border-color: #0acb8e;
}

.checkbox-danger .custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  background-color: #fe5461;
  border-color: #fe5461;
}

.checkbox-warning .custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  background-color: #fec400;
  border-color: #fec400;
}

.checkbox-info .custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  background-color: #04c7e0;
  border-color: #04c7e0;
}

.checkbox-light .custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  background-color: #f0f1f5;
  border-color: #f0f1f5;
}

.checkbox-dark .custom-control-input:checked ~ .custom-control-label::before {
  color: #ffffff;
  background-color: #31343d;
  border-color: #31343d;
}

/* Checkbox Ouline */
.checkbox-outline-primary .custom-control-input:checked ~ .custom-control-label::after,
.checkbox-outline-secondary .custom-control-input:checked ~ .custom-control-label::after,
.checkbox-outline-success .custom-control-input:checked ~ .custom-control-label::after,
.checkbox-outline-danger .custom-control-input:checked ~ .custom-control-label::after,
.checkbox-outline-warning .custom-control-input:checked ~ .custom-control-label::after,
.checkbox-outline-info .custom-control-input:checked ~ .custom-control-label::after,
.checkbox-outline-light .custom-control-input:checked ~ .custom-control-label::after,
.checkbox-outline-dark .custom-control-input:checked ~ .custom-control-label::after {
  left: -18px;
  top: 6px;
  width: 5px;
  height: 8px;
  background: transparent !important;
  border: solid #9e6de0;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}

.checkbox-outline-primary .custom-control-input:checked ~ .custom-control-label::before {
  color: #31343d !important;
  background-color: transparent;
}

.checkbox-outline-secondary .custom-control-input:checked ~ .custom-control-label::before {
  background-color: transparent;
  border-color: #fd5190;
}
.checkbox-outline-secondary .custom-control-input:checked ~ .custom-control-label::after {
  border-color: #fd5190;
}

.checkbox-outline-success .custom-control-input:checked ~ .custom-control-label::before {
  background-color: transparent;
  border-color: #0acb8e;
}
.checkbox-outline-success .custom-control-input:checked ~ .custom-control-label::after {
  border-color: #0acb8e;
}

.checkbox-outline-danger .custom-control-input:checked ~ .custom-control-label::before {
  background-color: transparent;
  border-color: #fe5461;
}
.checkbox-outline-danger .custom-control-input:checked ~ .custom-control-label::after {
  border-color: #fe5461;
}

.checkbox-outline-warning .custom-control-input:checked ~ .custom-control-label::before {
  background-color: transparent;
  border-color: #fec400;
}
.checkbox-outline-warning .custom-control-input:checked ~ .custom-control-label::after {
  border-color: #fec400;
}

.checkbox-outline-info .custom-control-input:checked ~ .custom-control-label::before {
  background-color: transparent;
  border-color: #04c7e0;
}
.checkbox-outline-info .custom-control-input:checked ~ .custom-control-label::after {
  border-color: #04c7e0;
}

.checkbox-outline-light .custom-control-input:checked ~ .custom-control-label::before {
  background-color: transparent;
  border-color: #f0f1f5;
}
.checkbox-outline-light .custom-control-input:checked ~ .custom-control-label::after {
  border-color: #f0f1f5;
}

.checkbox-outline-dark .custom-control-input:checked ~ .custom-control-label::before {
  background-color: transparent;
  border-color: #31343d;
}
.checkbox-outline-dark .custom-control-input:checked ~ .custom-control-label::after {
  border-color: #31343d;
}

/* Checkbox */
.radio-secondary .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #fd5190;
  background-color: #fd5190;
}

.radio-success .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #0acb8e;
  background-color: #0acb8e;
}

.radio-danger .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #fe5461;
  background-color: #fe5461;
}

.radio-info .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #04c7e0;
  background-color: #04c7e0;
}

.radio-light .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #f0f1f5;
  background-color: #f0f1f5;
}

.radio-dark .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #31343d;
  background-color: #31343d;
}

.radio-outline-primary .custom-control-input:checked ~ .custom-control-label::after,
.radio-outline-secondary .custom-control-input:checked ~ .custom-control-label::after,
.radio-outline-success .custom-control-input:checked ~ .custom-control-label::after,
.radio-outline-danger .custom-control-input:checked ~ .custom-control-label::after,
.radio-outline-info .custom-control-input:checked ~ .custom-control-label::after,
.radio-outline-light .custom-control-input:checked ~ .custom-control-label::after,
.radio-outline-dark .custom-control-input:checked ~ .custom-control-label::after {
  left: -19px;
  top: 8px;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #31343d;
}

.radio-outline-primary .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #9e6de0;
  background-color: #ffffff;
}
.radio-outline-primary .custom-control-input:checked ~ .custom-control-label::after {
  background: #9e6de0;
}

.radio-outline-secondary .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #fd5190;
  background-color: #ffffff;
}
.radio-outline-secondary .custom-control-input:checked ~ .custom-control-label::after {
  background: #fd5190;
}

.radio-outline-success .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #0acb8e;
  background-color: #ffffff;
}
.radio-outline-success .custom-control-input:checked ~ .custom-control-label::after {
  background: #0acb8e;
}

.radio-outline-danger .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #fe5461;
  background-color: #ffffff;
}
.radio-outline-danger .custom-control-input:checked ~ .custom-control-label::after {
  background: #fe5461;
}

.radio-outline-info .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #04c7e0;
  background-color: #ffffff;
}
.radio-outline-info .custom-control-input:checked ~ .custom-control-label::after {
  background: #04c7e0;
}

.radio-outline-light .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #f0f1f5;
  background-color: #ffffff;
}
.radio-outline-light .custom-control-input:checked ~ .custom-control-label::after {
  background: #f0f1f5;
}

.radio-outline-dark .custom-control-input:checked ~ .custom-control-label::before {
  border-color: #31343d;
  background-color: #ffffff;
}
.radio-outline-dark .custom-control-input:checked ~ .custom-control-label::after {
  background: #31343d;
}

/* Select2 Select */
.select2-container--default .select2-selection--single,
.select2-container--default .select2-selection--multiple {
  border-color: #e5e9f2;
  height: 40px;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: rgba(158, 109, 224, 0.3);
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  border-color: #9e6de0;
  background-color: rgba(158, 109, 224, 0.2);
  color: #9e6de0;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
  color: #9e6de0;
  padding-right: 0.31rem;
  margin-right: 0.31rem;
  border-right: 1px solid #9e6de0;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: 38px;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: #9e6de0;
}

/*===== NAV AND TABS =====*/
.nav-tabs {
  border-color: #e5e9f2;
}
.nav-tabs .nav-link {
  text-transform: uppercase;
  color: #31343d;
}
.nav-tabs .nav-link.disabled {
  color: #8a909d;
}

.nav-pills .nav-link {
  text-transform: uppercase;
  color: #31343d;
}
.nav-pills .nav-link.disabled {
  color: #8a909d;
}

/* Nav Underline */
.nav-underline {
  border-bottom: 1px solid #e5e9f2;
  text-align: center;
}
.nav-underline .nav-item.nav-link {
  color: #31343d;
  position: relative;
  padding-left: 0 !important;
  padding-right: 0 !important;
  padding-bottom: 0.5rem !important;
  margin-left: 1rem;
  margin-right: 1rem;
  font-size: 1.06rem;
}
.nav-underline .nav-item.nav-link.active::before {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 1px;
  content: "";
  background-color: rgba(49, 52, 61, 0.7);
}

/* Nav Underline Active */
.nav-underline-active-primary .nav-item .nav-link {
  color: #8a909d;
  position: relative;
  padding-bottom: 0.5rem;
}
@media (min-width: 1500px) {
  .nav-underline-active-primary .nav-item .nav-link {
    padding-bottom: 1rem;
  }
}
.nav-underline-active-primary .nav-item .nav-link.active {
  color: #9e6de0;
}
.nav-underline-active-primary .nav-item .nav-link.active::before {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  content: "";
  background-color: #9e6de0;
}
.nav-underline-active-primary .nav-item.dropdown.show .nav-link {
  color: #9e6de0;
}

/* Nav Custom Pills */
.nav-custom-pills .nav-item .nav-link.active {
  background-color: #9e6de0;
  border-color: #9e6de0 !important;
  color: #ffffff;
}
.nav-custom-pills .nav-item:not(:first-child):not(:last-child) .nav-link {
  border: 1px solid #e5e9f2;
  margin-left: -1px;
}
.nav-custom-pills .nav-item:first-child .nav-link {
  border: 1px solid #e5e9f2;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}
.nav-custom-pills .nav-item:last-child {
  border: 1px solid #e5e9f2;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
  margin-left: -1px;
}
.nav-custom-pills .nav-item.dropdown.show .nav-link {
  background-color: #9e6de0;
  color: #ffffff;
}

/* Nav Border Top */
.nav-border-top .nav-item .nav-link {
  text-transform: uppercase;
  color: #8a909d;
  padding: 0;
  margin: 0.5rem;
  position: relative;
}
@media (min-width: 768px) {
  .nav-border-top .nav-item .nav-link {
    margin-left: 25px;
    margin-right: 25px;
  }
}
.nav-border-top .nav-item .nav-link.active {
  color: #9e6de0;
}
.nav-border-top .nav-item .nav-link.active::before {
  position: absolute;
  top: -20px;
  left: 0;
  width: 100%;
  height: 2px;
  content: "";
  background-color: #9e6de0;
}

/* Nav Profile Follow */
.nav-profile-follow {
  margin-top: 1rem;
  margin-bottom: 1rem;
}

/* Nav settings */
.nav-settings {
  flex-direction: column;
}
.nav-settings .nav-link {
  color: #8a909d;
  padding-left: 0;
}
.nav-settings .nav-link i {
  font-size: 1rem;
}
.nav-settings .nav-link.active {
  color: #8243d7;
}
.nav-settings .nav-link:hover {
  color: #8243d7;
}

/*===== SIDEBAR NAVIGATION =====*/
.sidebar .nav > li > a:after {
  content: "";
  clear: both;
  display: table;
}

.left-sidebar {
  position: fixed;
  display: flex;
  flex-direction: column;
  transform: translateX(-250px);
  background-color: #1d1f26;
  top: 0;
  bottom: 0;
  background-attachment: fixed;
  background-position: left;
  background-repeat: no-repeat;
  background-size: contain;
}
@media (min-width: 768px) {
  .left-sidebar {
    transform: translateX(0);
    width: 250px;
    position: relative;
    z-index: 1;
  }
}
.left-sidebar::before {
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color: rgba(29, 31, 38, 0.85);
  content: "";
}

.sidebar {
  display: flex;
  flex-direction: column;
  overflow: hidden;
  height: 100%;
  z-index: 1050;
  min-height: 100vh;
  position: relative;
}
.sidebar .sidebar-inner {
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
  margin-top: 1rem;
}
.sidebar .sidebar-inner > li {
  position: relative;
}
.sidebar .sidebar-inner > li > a {
  padding: 1rem 1.5rem;
  line-height: 20px;
  color: #bfc7d9;
  display: block;
  text-decoration: none;
  text-transform: capitalize;
  font-size: 1rem;
  font-weight: 400;
  white-space: nowrap;
}

.sidebar .sidebar-inner > li.active > a {
  position: relative;
  z-index: 10;
  color: #ffffff;
  background-color: rgba(158, 109, 224, 0.4);
}
.sidebar .sidebar-inner .section-title {
  padding: 1.25rem 1.56rem 1rem;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.75rem;
  color: rgba(191, 199, 217, 0.7);
  letter-spacing: 1.2px;
  white-space: nowrap;
}
.sidebar .sidebar-inner .sub-menu .section-title {
  padding: 1.25rem 0.94rem 0.625rem;
}

/* App brand */
.app-brand {
  position: relative;
  display: block;
  border-bottom: 1px solid rgba(229, 233, 242, 0.25);
}
.app-brand a {
  display: flex;
  flex-direction: row;
  align-items: center;
  height: 76px;
  line-height: 76px;
  width: 250px;
  transition: width 0.3s ease-in-out;
  padding-left: 1.56rem;
}
@media (prefers-reduced-motion: reduce) {
  .app-brand a {
    transition: none;
  }
}
@media (min-width: 768px) {
  .app-brand a {
    overflow: hidden;
  }
}
.app-brand a img {
  max-width: 128px;
  vertical-align: middle;
}
.app-brand .brand-name {
  color: #ffffff;
  font-size: 1.25rem;
  margin-left: 0.31rem;
}

/*  Nav menus Icon Styles */
.sidebar .nav > li > a i {
  float: left;
  margin-right: 0.94rem;
  width: 20px;
  text-align: center;
  line-height: 20px;
  font-size: 1.5rem;
}

/* Caret styles */
.sidebar li > a .caret {
  width: 20px;
  height: 20px;
  line-height: 20px;
  text-align: center;
  font-size: 1.25rem;
  border: none;
}
.sidebar li > a .caret:before {
  content: "\f142";
  display: block;
  text-align: center;
  transition: all 0.2s linear;
  opacity: 0.5;
}

.sidebar li > a .caret:before {
  font-family: "Material Design Icons" !important;
  font-weight: 400;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
}

.sidebar li.active > a .caret:before,
.sidebar li.expand > a .caret:before,
.sidebar li.expanding > a .caret:before {
  transform: rotate(0);
}

.sidebar li.active.expand > a .caret:before,
.sidebar li.expand > a .caret:before,
.sidebar li.expanding > a .caret:before {
  transform: rotate(90deg);
}

.sidebar li.active > a .caret:before {
  opacity: 1;
}

.sidebar li.closed > a .caret:before,
.sidebar li.closing > a .caret:before {
  transform: rotate(0);
}

/*  sub-menu dropdowns */
.sidebar .sub-menu {
  list-style-type: none;
  padding: 0.625rem 0 0.625rem 2.81rem;
  margin: 0;
  position: relative;
}
.sidebar .sub-menu > .active .sidenav-item-link {
  color: #ffffff;
}
.sidebar .sub-menu .has-sub.active .sidenav-item-link {
  color: #ffffff;
}
.sidebar .sub-menu .sub-menu .active a {
  color: #ffffff;
}
.sidebar .sub-menu .sub-menu .active a::after {
  border-color: #ffffff;
}
.sidebar .sub-menu > li > a {
  padding: 0.625rem 1.875rem 0.625rem 0.94rem;
  display: block;
  text-decoration: none;
  position: relative;
  font-size: 0.9375rem;
  white-space: nowrap;
  color: #bfc7d9;
}
.sidebar .sub-menu > li .sub-menu {
  padding-left: 2.18rem;
}
.sidebar .sub-menu > li .sub-menu > li > a {
  position: relative;
  padding-left: 0;
}
.sidebar .sub-menu > li .sub-menu > li > a::after {
  position: absolute;
  content: "";
  top: 20px;
  left: -20px;
  border: 1px solid #bfc7d9;
  width: 10px;
}

.sidebar .has-sub.active.expand > .sub-menu {
  display: none;
}

.sidebar .has-sub .has-sub .caret {
  top: 12px;
}

.sidebar .sidenav-item-link {
  display: flex !important;
  flex-grow: 1;
  align-items: center;
}
.sidebar .sidenav-item-link .nav-text {
  margin-right: auto;
  text-transform: capitalize;
}
.sidebar .sidenav-item-link .badge {
  padding: 0.4em 0.6em;
}

/* Sidebar for Mobile */
.sidebar-mobile-in .left-sidebar {
  transform: translateX(0px) !important;
  z-index: 1050;
  transition: transform 0.3s ease-in-out;
}
@media (min-width: 768px) {
  .sidebar-mobile-in .left-sidebar {
    transform: translateX(-250px) !important;
  }
}

.sidebar-mobile-out .left-sidebar {
  transform: translateX(-250px) !important;
  z-index: 1050;
}
@media (min-width: 768px) {
  .sidebar-mobile-out .left-sidebar {
    transform: translateX(0px) !important;
  }
}

/* Sidebar Minified */
.sidebar-minified .left-sidebar {
  width: 250px;
  z-index: 1050;
  transform: translateX(0);
  transition: transform 0.3s ease-in-out;
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar {
    width: 85px;
    transition: width 0.3s ease-in;
  }
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar .app-brand .brand-name {
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar .app-brand .brand-name {
    transition: none;
  }
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar .section-title {
    height: 0;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    padding: 0;
  }
}
.sidebar-minified .left-sidebar .sidebar .sub-menu {
  padding-top: 0;
  padding-bottom: 0;
}
.sidebar-minified .left-sidebar .nav > li > a > .caret,
.sidebar-minified .left-sidebar .nav > li > a > span {
  opacity: 1;
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar .nav > li > a > .caret,
  .sidebar-minified .left-sidebar .nav > li > a > span {
    opacity: 0;
  }
}
.sidebar-minified .left-sidebar .nav > li > a > .caret {
  right: 15px;
}
.sidebar-minified .left-sidebar .nav li.has-sub .collapse > .sub-menu {
  left: 0;
  top: 0;
  width: 100%;
  margin: 0;
}
.sidebar-minified .left-sidebar .nav li.has-sub.expand .collapse > .sub-menu {
  height: 0;
}
.sidebar-minified .left-sidebar .nav li.has-sub.expand .collapse > .sub-menu li {
  visibility: hidden;
  opacity: 0;
}
@media (max-width: 767.98px) {
  .sidebar-minified .left-sidebar .nav li.has-sub.expand .collapse > .sub-menu {
    transition: opacity 0.3s ease-in-out;
    display: block !important;
    opacity: 1;
    visibility: visible;
  }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar .nav li.has-sub.expand .collapse > .sub-menu {
    transition: none;
  }
}
.sidebar-minified .left-sidebar .separator {
  border-top-width: 0;
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar .sidebar-footer {
    height: 0;
  }
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar .sidebar-footer-content {
    visibility: hidden;
    opacity: 0;
  }
}
.sidebar-minified .left-sidebar .sidebar-scrollbar {
  overflow: unset !important;
}

/* Sidebar Minified Hover */
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar:hover {
    width: 250px;
    margin-right: -10.3125rem;
  }
}
.sidebar-minified .left-sidebar:hover .section-title {
  height: auto;
  padding: 1.25rem 1.56rem 1rem;
  visibility: visible;
  opacity: 1;
  transition: opacity 0.3s ease-in-out 0.1s;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar:hover .section-title {
    transition: none;
  }
}
.sidebar-minified .left-sidebar:hover .nav li.has-sub.expand .collapse > .sub-menu {
  transition: opacity 0.3s ease-in-out;
  height: -moz-min-content;
  height: min-content;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar:hover .nav li.has-sub.expand .collapse > .sub-menu {
    transition: none;
  }
}
.sidebar-minified .left-sidebar:hover .nav li.has-sub.expand .collapse > .sub-menu li {
  opacity: 1;
  visibility: visible;
  transition: opacity 0.3s ease-out 0.25s;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar:hover .nav li.has-sub.expand .collapse > .sub-menu li {
    transition: none;
  }
}
.sidebar-minified .left-sidebar:hover .nav > li > a > .caret,
.sidebar-minified .left-sidebar:hover .nav > li > a > span {
  opacity: 1;
  transition: opacity 0.3s ease-in;
  transition-delay: 0.15s;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar:hover .nav > li > a > .caret,
  .sidebar-minified .left-sidebar:hover .nav > li > a > span {
    transition: none;
  }
}
.sidebar-minified .left-sidebar:hover .brand-name {
  opacity: 1;
  visibility: visible;
  transition: opacity 0.3s ease;
  transition-delay: 0.3s;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar:hover .brand-name {
    transition: none;
  }
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar:hover .app-brand .brand-name {
    opacity: 1;
    visibility: visible;
    transition-delay: 0.3s;
  }
}
.sidebar-minified .left-sidebar:hover .sidebar .sub-menu {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
}
.sidebar-minified .left-sidebar:hover .separator {
  border-top-width: 1px;
}
@media (min-width: 768px) {
  .sidebar-minified .left-sidebar:hover .sidebar-footer {
    height: -moz-min-content;
    height: min-content;
  }
}
.sidebar-minified .left-sidebar:hover .sidebar-footer-content {
  visibility: visible;
  opacity: 1;
  transition: opacity 0.3s ease-in-out 0.15s;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified .left-sidebar:hover .sidebar-footer-content {
    transition: none;
  }
}
.sidebar-minified .left-sidebar:hover .sidebar-scrollbar {
  overflow: hidden !important;
}

/* Sidebar Minified Not transition */
@media (min-width: 768px) {
  .sidebar-minified:not(.left-sidebar) .left-sidebar {
    transition-duration: 0.3s;
    transition-timing-function: ease-in-out;
    transition-property: margin-left, margin-right, width;
  }
}

/* Sidebar Static With Minified */
.sidebar-static.sidebar-minified .page-wrapper .main-header {
  transition: padding-left 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-static.sidebar-minified .page-wrapper .main-header {
    transition: none;
  }
}
@media (min-width: 768px) {
  .sidebar-static.sidebar-minified.navbar-fixed .page-wrapper .main-header {
    padding-left: 4.69rem;
  }
}
.sidebar-static.sidebar-minified-out .left-sidebar {
  transition: width 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-static.sidebar-minified-out .left-sidebar {
    transition: none;
  }
}
.sidebar-static.sidebar-minified-out .page-wrapper .main-header {
  transition: padding-left 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-static.sidebar-minified-out .page-wrapper .main-header {
    transition: none;
  }
}

/* Sidebar Fixed With Minified Layout Container */
@media (min-width: 768px) {
  .sidebar-fixed.sidebar-minified .page-wrapper {
    padding-left: 5.25rem;
    transition: padding-left 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-fixed.sidebar-minified .page-wrapper {
    transition: none;
  }
}
@media (min-width: 768px) {
  .sidebar-fixed.sidebar-minified.navbar-fixed .page-wrapper .main-header {
    padding-left: 4.69rem;
    transition: padding-left 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-fixed.sidebar-minified.navbar-fixed .page-wrapper .main-header {
    transition: none;
  }
}

/* Sidebar Minified Out */
.sidebar-minified-out {
  /* Sidebar Fixed With Sidebar Minified Out */
}
.sidebar-minified-out .left-sidebar {
  z-index: 10000;
  transform: translateX(-250px);
  transition: transform 0.3s ease-in-out !important;
}
@media (min-width: 768px) {
  .sidebar-minified-out .left-sidebar {
    transform: translateX(0px);
    transition: width 0.3s ease-in-out !important;
  }
}
.sidebar-minified-out .sidebar .sub-menu {
  padding-bottom: 0.625rem;
  padding-top: 0.625rem;
}
.sidebar-minified-out .sidebar .nav > li > a span {
  transition: opacity 0.3s ease-in-out 0.3s;
  visibility: visible;
  opacity: 1;
}
.sidebar-minified-out .sidebar li > a .caret {
  transition: opacity 0.3s ease-in-out 0.3s;
  visibility: visible;
  opacity: 1;
}
.sidebar-minified-out .nav li.has-sub.expand .collapse > .sub-menu {
  height: -moz-min-content;
  height: min-content;
}
.sidebar-minified-out .nav li.has-sub.expand .collapse > .sub-menu li {
  opacity: 1;
  visibility: visible;
  transition: opacity 0.3s ease-out 0.25s;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified-out .nav li.has-sub.expand .collapse > .sub-menu li {
    transition: none;
  }
}
.sidebar-minified-out .sidebar-footer-content {
  visibility: visible;
  opacity: 1;
  transition: opacity 0.3s ease-in-out 0.15s;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified-out .sidebar-footer-content {
    transition: none;
  }
}
.sidebar-minified-out .left-sidebar {
  transition: width 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified-out .left-sidebar {
    transition: none;
  }
}
.sidebar-minified-out .page-wrapper {
  transition: padding-left 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified-out .page-wrapper {
    transition: none;
  }
}
.sidebar-minified-out .page-wrapper .main-header {
  transition: padding-left 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-minified-out .page-wrapper .main-header {
    transition: none;
  }
}

/* Sidebar Fixed And Offcanvas */
@media (min-width: 768px) {
  .sidebar-fixed-offcanvas .left-sidebar,
  .sidebar-fixed .left-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 1050;
  }
}
.sidebar-fixed-offcanvas .left-sidebar .sidebar-with-footer,
.sidebar-fixed .left-sidebar .sidebar-with-footer {
  padding-bottom: 142px;
}
.sidebar-fixed-offcanvas .left-sidebar .sidebar-with-footer .sidebar-footer,
.sidebar-fixed .left-sidebar .sidebar-with-footer .sidebar-footer {
  position: absolute;
  bottom: 0;
}
@media (min-width: 768px) {
  .sidebar-fixed-offcanvas .page-wrapper,
  .sidebar-fixed .page-wrapper {
    padding-left: 15.6rem;
  }
}
@media (min-width: 768px) {
  .sidebar-fixed-offcanvas .main-header,
  .sidebar-fixed .main-header {
    padding-left: 15.6rem;
  }
}
@media (min-width: 768px) {
  .sidebar-fixed-offcanvas.navbar-static .main-header,
  .sidebar-fixed.navbar-static .main-header {
    padding-left: 0;
  }
}

.sidebar-fixed-offcanvas.sidebar-collapse .page-wrapper {
  padding-left: 0;
}
@media (min-width: 768px) {
  .sidebar-fixed-offcanvas.sidebar-collapse-out .sidebar-footer {
    left: 0px;
    transition: left 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-fixed-offcanvas.sidebar-collapse-out .sidebar-footer {
    transition: none;
  }
}

/* Sidebar Collapse */
@media (min-width: 768px) {
  .sidebar-collapse .left-sidebar {
    margin-left: -15.6rem;
    transition: margin-left 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-collapse .left-sidebar {
    transition: none;
  }
}
@media (min-width: 768px) {
  .sidebar-collapse .page-wrapper {
    transition: padding-left 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-collapse .page-wrapper {
    transition: none;
  }
}

/* Sidebar Out Collapse */
@media (min-width: 768px) {
  .sidebar-collapse-out .left-sidebar {
    margin-left: 0px;
    transition: margin-left 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-collapse-out .left-sidebar {
    transition: none;
  }
}
@media (min-width: 768px) {
  .sidebar-collapse-out .page-wrapper {
    transition: padding-left 0.3s ease-in-out;
  }
}
@media (min-width: 768px) and (prefers-reduced-motion: reduce) {
  .sidebar-collapse-out .page-wrapper {
    transition: none;
  }
}

.sidebar-collapse.navbar-fixed .page-wrapper .main-header {
  padding-left: 0;
  transition: padding-left 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-collapse.navbar-fixed .page-wrapper .main-header {
    transition: none;
  }
}

.sidebar-collapse-out .page-wrapper .main-header {
  transition: padding-left 0.3s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .sidebar-collapse-out .page-wrapper .main-header {
    transition: none;
  }
}

/* Sidebar Static With Footer */
.sidebar-static .sidebar.sidebar-with-footer .slimScrollDiv,
.sidebar-static-offcanvas .sidebar.sidebar-with-footer .slimScrollDiv {
  height: 100%;
}
@media (min-width: 768px) {
  .sidebar-static .sidebar.sidebar-with-footer .slimScrollDiv,
  .sidebar-static-offcanvas .sidebar.sidebar-with-footer .slimScrollDiv {
    height: auto !important;
  }
}
@media (min-width: 768px) {
  .sidebar-static.navbar-fixed .main-header,
  .sidebar-static-offcanvas.navbar-fixed .main-header {
    padding-left: 15.6rem;
  }
}

/* Mobile Sticky Body Overlay */
.mobile-sticky-body-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 1;
  visibility: visible;
  transition: opacity 0.3s ease-in-out 0s;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1045;
}
@media (min-width: 768px) {
  .mobile-sticky-body-overlay {
    display: none;
  }
}

/* Sidebar Footer Content*/
.sidebar-footer-content {
  width: 250px;
  background-color: #9e6de0;
}
.sidebar-footer-content ul li {
  width: 50%;
}
.sidebar-footer-content ul li a {
  color: #ffffff;
  text-align: center;
  display: block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.sidebar-footer-content ul li a i {
  font-size: 25px;
}
.sidebar-footer-content ul li:first-child {
  border-right: 1px solid rgba(255, 255, 255, 0.2);
}

/* Right Sidebar Toogler Add */
.right-sidebar-toggoler-in .right-sidebar {
  right: 0;
  transition: right 0.3s ease-in-out;
}
.right-sidebar-toggoler-in .right-sidebar .btn-right-sidebar-toggler {
  right: 60px;
  transition: right 0.3s ease-in-out;
}
.right-sidebar-toggoler-in .right-sidebar .btn-right-sidebar-toggler i {
  transform: rotate(180deg);
  transition: transform 0.3s ease-in-out;
}

.right-sidebar-toggoler-out .right-sidebar {
  transition: right 0.3s ease-in-out;
}
.right-sidebar-toggoler-out .right-sidebar .btn-right-sidebar-toggler {
  transition: right 0.3s ease-in-out;
}
.right-sidebar-toggoler-out .right-sidebar i {
  transform: rotate(0deg);
  transition: transform 0.3s ease-in-out;
}

/* Right Sidebar */
.right-sidebar {
  width: 60px;
  min-height: 100vh;
  position: fixed;
  right: -60px;
  top: 0;
  transition: right 0.3s ease-in-out;
  /* Form Group Label */
}
@media (min-width: 1200px) {
  .right-sidebar {
    right: 0;
    transition: right 0.3s ease-in-out;
  }
}
.right-sidebar .btn-right-sidebar-toggler {
  position: fixed;
  top: 135px;
  right: 0;
  background-color: #ffffff;
  border-top-left-radius: 1rem;
  border-bottom-left-radius: 1rem;
  width: 35px;
  height: 30px;
  border: 1px solid #e5e9f2;
}
.right-sidebar .btn-right-sidebar-toggler i {
  line-height: 28px;
  margin-left: 5px;
  font-size: 1.25rem;
  display: inline-block;
}
@media (min-width: 1200px) {
  .right-sidebar .btn-right-sidebar-toggler {
    display: none;
  }
}
.right-sidebar .form-group label {
  line-height: 1.3;
}

/* Nav Right Sidebar */
.nav-right-sidebar {
  flex-direction: column;
  position: relative;
}
.nav-right-sidebar .nav-item {
  margin: auto;
  margin-bottom: 0.75rem;
}
.nav-right-sidebar .nav-link {
  font-size: 1.5rem;
}
.nav-right-sidebar .nav-link:focus {
  background-color: rgba(253, 81, 144, 0.1);
}

/* Nav Container */
.right-nav-container {
  position: relative;
  z-index: 100;
  background-color: #ffffff;
  min-height: 100vh;
  border-left: 1px solid #e5e9f2;
}
.right-nav-container .nav-right-sidebar {
  padding-top: 120px;
}

/* Right Sidebar Tab Content */
.right-sidebar-tab {
  position: fixed;
  top: 76px;
  right: -375px;
  width: 315px;
  min-height: 100%;
  background-color: #ffffff;
  border-left: 1px solid #e5e9f2;
}
.right-sidebar-tab .tab-content {
  position: relative;
  z-index: 10;
}

/* Right Sidebar Content Out */
@media (min-width: 1200px) {
  .right-sidebar-out .content-wrapper {
    margin-right: 60px;
    transition: margin-right 0.3s ease-in-out;
  }
}
.right-sidebar-out .right-sidebar-tab {
  right: -315px;
  transition: right 0.3s ease-in-out;
}

/* Right Sidebar Content IN */
@media (min-width: 1200px) {
  .right-sidebar-in .content-wrapper {
    margin-right: 375px;
    transition: margin-right 0.3s ease-in-out;
  }
}
.right-sidebar-in .right-sidebar-tab {
  right: 60px;
  transition: right 0.3s ease-in-out;
}

/* Nav Icon Small */
.icon-sm {
  width: 45px;
  height: 45px;
  line-height: 45px;
  border-radius: 50%;
  padding: 0;
  text-align: center;
}

/* Card Right Sidebar */
.card-right-sidebar {
  border: none;
}
.card-right-sidebar .card-header {
  background-color: transparent;
  padding: 1rem;
  padding-top: 1.5rem;
  padding-right: 1rem;
  padding-bottom: 1rem;
  padding-right: 1rem;
  color: #31343d;
}
.card-right-sidebar .card-header .close {
  width: 30px;
  height: 30px;
  line-height: 1;
  border-radius: 50%;
  margin-top: -5px;
}
.card-right-sidebar .card-header .close:hover {
  background-color: rgba(253, 81, 144, 0.1);
}
.card-right-sidebar .card-header .card-title {
  margin-bottom: 0;
  font-size: 0.94rem;
}

/* Sidebar Light */
.left-sidebar.sidebar-light {
  background-color: #ffffff;
  border-right: 1px solid #e5e9f2;
}
.left-sidebar.sidebar-light .app-brand {
  border-bottom: 1px solid #e5e9f2;
}
.left-sidebar.sidebar-light .app-brand .brand-name {
  color: #31343d;
}
.left-sidebar.sidebar-light .sidebar .sub-menu > li > a {
  color: #646a77;
}
.left-sidebar.sidebar-light .sidebar .sidebar-inner > li > a {
  color: #646a77;
}
.left-sidebar.sidebar-light .sidebar .sidebar-inner > li.active > a {
  background-color: #9e6de0;
  color: #ffffff;
}
.left-sidebar.sidebar-light .sidebar .sidebar-inner .section-title {
  color: #646a77;
}
.left-sidebar.sidebar-light .sidebar .sub-menu .has-sub.active .sidenav-item-link {
  color: #1d1f26;
}
.left-sidebar.sidebar-light .sidebar .sub-menu .sub-menu .active a {
  color: #1d1f26;
}
.left-sidebar.sidebar-light .sidebar .sub-menu .sub-menu .active a::after {
  border-color: #1d1f26;
}
.left-sidebar.sidebar-light .sidebar .sub-menu > li .sub-menu > li > a::after {
  border-color: #646a77;
}
.left-sidebar.sidebar-light .sidebar .sub-menu > .active .sidenav-item-link {
  color: #1d1f26;
}
.left-sidebar.sidebar-light .sidebar-footer {
  background-color: #ffffff;
}
.left-sidebar.sidebar-light::before {
  background-color: rgba(255, 255, 255, 0.92);
}

/* Sidebar Light */
.left-sidebar.sidebar-primary {
  background-color: #9e6de0;
  border-right: 1px solid #e5e9f2;
}
.left-sidebar.sidebar-primary .app-brand {
  border-bottom: 1px solid #e5e9f2;
}
.left-sidebar.sidebar-primary .app-brand .brand-name {
  color: #31343d;
}
.left-sidebar.sidebar-primary .sidebar .sub-menu > li > a {
  color: #646a77;
}
.left-sidebar.sidebar-primary .sidebar .sidebar-inner > li > a {
  color: #646a77;
}
.left-sidebar.sidebar-primary .sidebar .sidebar-inner > li.active > a {
  background-color: #ffffff;
  color: #ffffff;
}
.left-sidebar.sidebar-primary .sidebar .sidebar-inner .section-title {
  color: #646a77;
}
.left-sidebar.sidebar-primary .sidebar .sub-menu .has-sub.active .sidenav-item-link {
  color: #1d1f26;
}
.left-sidebar.sidebar-primary .sidebar .sub-menu .sub-menu .active a {
  color: #1d1f26;
}
.left-sidebar.sidebar-primary .sidebar .sub-menu .sub-menu .active a::after {
  border-color: #1d1f26;
}
.left-sidebar.sidebar-primary .sidebar .sub-menu > li .sub-menu > li > a::after {
  border-color: #646a77;
}
.left-sidebar.sidebar-primary .sidebar .sub-menu > .active .sidenav-item-link {
  color: #1d1f26;
}
.left-sidebar.sidebar-primary .sidebar-footer {
  background-color: #ffffff;
}
.left-sidebar.sidebar-primary::before {
  background-color: rgba(255, 255, 255, 0.92);
}

/* Right Sidebar Dark */
.right-sidebar-dark .right-nav-container {
  background-color: #31343d;
  border-left: 1px solid rgba(255, 255, 255, 0.2);
}

/* Simplebar */
.simplebar-scrollbar::before {
  background-color: rgba(153, 153, 153, 0.5);
  width: 5px;
  left: 6px;
  right: 6px;
}

/* ===== Tables ===== */
.table {
  margin-bottom: 0;
}
.table thead th {
  text-transform: uppercase;
  color: #31343d;
  border-bottom: 0;
}
.table.table-dark thead th {
  color: #ffffff;
}

/* Produc Data Table */
.table.table-hover tbody tr:hover {
  background-color: #9e6de0;
  box-shadow: 0px 10px 18px 0px rgba(55, 103, 208, 0.2);
}
.table.table-hover tbody tr:hover td {
  color: #ffffff;
}
.table.table-hover tbody tr:hover .custom-control-input:checked ~ .custom-control-label::before {
  background-color: #ffffff;
  color: #9e6de0;
}
.table.table-hover tbody tr:hover .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='#9e6de0' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}
.table.table-hover tbody tr:hover .icon-burger-mini::before,
.table.table-hover tbody tr:hover .card .dropdown .dropdown-toggle {
  color: #ffffff !important;
}

/* Table Product */
.table.table-product th, .table.table-product td {
  border-top-color: #e5e9f2 !important;
}
.table.table-product thead th {
  text-transform: uppercase;
  color: #31343d;
  border-bottom: none;
  padding-left: 10px;
  padding-right: 10px;
}
.table.table-product tbody td {
  padding-left: 18px;
  padding: 14px 10px;
}
.table.table-product tbody td img {
  border-radius: 5px;
  max-width: 40px;
  max-height: 48px;
}

/* Table Thead Border */
.table-thead-border tr th {
  padding-left: 0;
  padding-right: 0;
  border-bottom: 1px solid #e5e9f2;
}
.table-thead-border tr td {
  padding-left: 0;
  padding-right: 0;
  padding-top: 0.9375rem;
  padding-bottom: 0.9375rem;
}
.table-thead-border tr td a {
  color: #31343d;
  transition: -webkit-text-decoration 0.3s ease-in-out;
  transition: text-decoration 0.3s ease-in-out;
  transition: text-decoration 0.3s ease-in-out, -webkit-text-decoration 0.3s ease-in-out;
}
.table-thead-border tr td a:hover {
  color: #9e6de0;
  text-decoration: underline;
}

/* TH Width */
.th-width-250 {
  width: 250px;
}

/* ===== Data Tables ===== */
table.dataTable thead th {
  white-space: nowrap;
}

table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting {
  border-bottom: 0;
  padding-right: 20px;
}
@media (min-width: 1200px) {
  table.dataTable thead .sorting_asc,
  table.dataTable thead .sorting_desc,
  table.dataTable thead .sorting {
    background-position-x: 90%;
  }
}

.table.dataTable.no-footer,
.dataTables_wrapper.no-footer .dataTables_scrollBody {
  border-bottom-color: #e5e9f2;
}

/* Data table Filter */
.dataTables_wrapper .dataTables_filter {
  float: none;
  text-align: left;
  margin-bottom: 15px;
}
.dataTables_wrapper .dataTables_filter label {
  color: #31343d;
  font-weight: 700;
}
.dataTables_wrapper .dataTables_filter input {
  padding: 10px 15px;
  border: 1px solid #e5e9f2;
  border-radius: 5px;
}

/* Datatable Pagination */
.dataTables_paginate.paging_simple_numbers {
  margin-top: 30px;
}
.dataTables_paginate.paging_simple_numbers .paginate_button {
  border: 1px solid #e5e9f2 !important;
  padding: 10px;
  background: none !important;
  background-color: #ffffff;
  margin-left: 5px;
  margin-right: 5px;
}
@media (min-width: 768px) {
  .dataTables_paginate.paging_simple_numbers .paginate_button {
    padding: 10px 20px;
  }
}
.dataTables_paginate.paging_simple_numbers .paginate_button:hover {
  color: #31343d !important;
}
.dataTables_paginate.paging_simple_numbers .paginate_button.current {
  background: none !important;
  background-color: #9e6de0 !important;
  border-color: #9e6de0 !important;
  color: #ffffff !important;
}
.dataTables_paginate.paging_simple_numbers .paginate_button.current:hover {
  color: #ffffff !important;
}
.dataTables_paginate.paging_simple_numbers .paginate_button.previous.disabled,
.dataTables_paginate.paging_simple_numbers .paginate_button.next.disabled {
  color: #8a909d !important;
  border-color: #e5e9f2 !important;
}
.dataTables_paginate.paging_simple_numbers .paginate_button.previous,
.dataTables_paginate.paging_simple_numbers .paginate_button.next {
  color: #9e6de0 !important;
  border-color: #9e6de0 !important;
  display: none;
}
@media (min-width: 576px) {
  .dataTables_paginate.paging_simple_numbers .paginate_button.previous,
  .dataTables_paginate.paging_simple_numbers .paginate_button.next {
    display: inline-block;
  }
}

/*===== MEDIA =====*/
/* Media Small */
.media-sm {
  margin-bottom: 1.5rem;
}
.media-sm .media-sm-wrapper {
  position: relative;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 1rem;
}
.media-sm .media-sm-wrapper img {
  border-radius: 50%;
}
.media-sm .media-sm-wrapper i {
  text-align: center;
  line-height: 50px;
  display: block;
  color: #ffffff;
  font-size: 1.5rem;
}
.media-sm .media-sm-wrapper .active {
  position: absolute;
  bottom: -3px;
  right: 0px;
  border: 3px solid #ffffff;
  width: 16px;
  height: 16px;
  border-radius: 50%;
}
.media-sm a {
  color: #8a909d;
}
.media-sm .title {
  display: block;
  font-size: 1rem;
  font-weight: 700;
  color: #31343d;
  margin-bottom: 0.25rem;
}
.media-sm .discribe {
  display: block;
  white-space: nowrap;
  width: 210px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.media-sm .time time {
  font-size: 0.75rem;
  font-style: italic;
  font-weight: 700;
}

/* Media Extra Small */
.media-xs {
  margin-bottom: 1.5rem;
}
.media-xs .media-xs-wrapper {
  position: relative;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 1rem;
}
.media-xs .media-xs-wrapper img {
  border-radius: 50%;
}
.media-xs .media-xs-wrapper i {
  text-align: center;
  line-height: 40px;
  display: block;
  color: #ffffff;
  font-size: 1rem;
}
.media-xs .media-xs-wrapper .active {
  position: absolute;
  bottom: -3px;
  right: 0px;
  border: 3px solid #ffffff;
  width: 16px;
  height: 16px;
  border-radius: 50%;
}
.media-xs a {
  color: #8a909d;
}
.media-xs .title {
  display: block;
  font-size: 1rem;
  font-weight: 700;
  color: #31343d;
  margin-bottom: 0.25rem;
}
.media-xs .discribe {
  display: block;
  white-space: nowrap;
  width: 210px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.media-xs .time time {
  font-size: 0.75rem;
  font-style: italic;
  font-weight: 700;
}

/* Media Chat */
.media-chat {
  margin-bottom: 1.25rem;
  /* Media Chat Right */
}
.media-chat img {
  margin-right: 0.75rem;
}
.media-chat .media-body {
  flex: unset;
}
.media-chat .text-content {
  min-width: 5%;
  padding: 1.25rem;
  margin-bottom: 0.5rem;
  background-color: #9e6de0;
  border-top-left-radius: 0px;
  border-top-right-radius: 25px;
  border-bottom-right-radius: 25px;
  border-bottom-left-radius: 0;
}
.media-chat .text-content:first-child {
  border-top-left-radius: 25px;
}
.media-chat .text-content:last-child:not(:first-child) {
  border-bottom-left-radius: 25px;
}
.media-chat .message {
  display: block;
  font-size: 0.88rem;
  color: #ffffff;
  font-weight: 700;
}
.media-chat .time {
  color: rgba(255, 255, 255, 0.6);
}
.media-chat.media-chat-right {
  justify-content: flex-end;
}
.media-chat.media-chat-right img {
  margin-right: 0;
}
.media-chat.media-chat-right .media-body {
  margin-right: 0.75rem;
}
.media-chat.media-chat-right .text-content {
  box-shadow: 0px 0px 18px 0px rgba(103, 68, 149, 0.1);
  background-color: #ffffff;
  border-bottom-left-radius: 25px;
  border-top-left-radius: 25px;
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}
.media-chat.media-chat-right .text-content:first-child {
  border-top-right-radius: 25px;
  border-bottom-left-radius: 25px;
}
.media-chat.media-chat-right .text-content:last-child:not(:first-child) {
  border-bottom-left-radius: 25px;
  border-bottom-right-radius: 25px;
}
.media-chat.media-chat-right .message {
  color: #31343d;
}
.media-chat.media-chat-right .time {
  color: #8a909d;
}

.status {
  position: absolute;
  bottom: 0;
  right: 0px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: 2px solid #ffffff;
}
.status.active {
  background-color: #0acb8e;
}
.status.away {
  background-color: #fec400;
}

.last-msg {
  width: 180px;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  margin-bottom: 0;
  color: #fd5190;
}
@media (min-width: 768px) {
  .last-msg {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .last-msg {
    width: 125px;
  }
}
@media (min-width: 1200px) {
  .last-msg {
    width: 220px;
  }
}

/*===== OFFCANVAS =====*/
.card-offcanvas {
  border-radius: 0;
  position: fixed;
  top: 0px;
  right: 0;
  min-width: 320px;
  min-height: 100%;
  background-color: #ffffff;
  box-shadow: -5px 0px 20px 0px rgba(0, 0, 0, 0.18);
  z-index: 1030;
  transform: translateX(350px);
  transition: transform 0.3s ease-in-out;
}
.card-offcanvas .card-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  padding-top: 1.4375rem;
  padding-right: 1.25rem;
  padding-bottom: 1rem;
  padding-left: 1.25rem;
  background-color: transparent;
  border-bottom-color: #e5e9f2;
}
.card-offcanvas .card-header h2 {
  font-size: 1.375rem;
  color: #31343d;
}
.card-offcanvas .card-body {
  padding: 1.25rem;
}
.card-offcanvas.active {
  transform: translateX(0);
  transition: transform 0.3s ease-in-out;
}

/* Offcanvas Overlay */
.offcanvas-overlay {
  opacity: 1;
  visibility: visible;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  overflow: hidden;
  z-index: 1025;
  background: rgba(0, 0, 0, 0.3);
  animation: k-animate-fade-in 0.3s linear 1;
}

/*===== BUTTON LOADING =====*/
.btn.btn-ladda {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 500;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  box-shadow: none;
  cursor: pointer;
  white-space: nowrap;
  padding: auto 20px;
  font-size: 0.9375rem;
  line-height: auto;
  border-radius: 0px;
}

.ladda-button[data-style=contract-overlay][data-loading] {
  z-index: 100;
  width: 45px;
}

.ladda-button[data-style=contract][data-loading] {
  width: 45px;
}

.btn-primary.ladda-button[data-loading]:hover {
  background-color: #9e6de0;
}

.btn-secondary.ladda-button[data-loading]:hover {
  background-color: #fd5190;
}

.btn-info.ladda-button[data-loading]:hover {
  background-color: #04c7e0;
}

.btn-success.ladda-button[data-loading]:hover {
  background-color: #0acb8e;
}

.btn-warning.ladda-button[data-loading]:hover {
  background-color: #fec400;
}

.btn-danger.ladda-button[data-loading]:hover {
  background-color: #fe5461;
}

.btn-light.ladda-button[data-loading]:hover {
  background-color: #f0f1f5;
}

.btn-dark.ladda-button[data-loading]:hover {
  background-color: #31343d;
}

/* ===== Date Range ===== */
.date-range {
  cursor: pointer;
}
.date-range .date-holder {
  font-size: 0.875rem;
  color: #8a909d;
  text-transform: uppercase;
}
.date-range i.mdi.mdi-menu-down {
  position: relative;
}
.date-range i.mdi.mdi-menu-down:before {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}
.date-range.date-range-lg {
  padding-left: 1.625rem;
  padding-right: 1.625rem;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  border-radius: 5px;
  box-shadow: 0px 1px 2px 0px rgba(28, 29, 36, 0.1), inset 0px -1px 0px 0px rgba(229, 230, 235, 0.1);
}
.date-range.date-range-lg .date-holder {
  font-size: 1rem;
  text-transform: capitalize;
}
@media (min-width: 1200px) {
  .date-range.date-range-lg .date-holder {
    font-size: 1.375rem;
  }
}

.daterangepicker:before, .daterangepicker:after {
  display: none;
}
.daterangepicker .ranges li.active {
  background-color: #9e6de0;
}

.daterangepicker td.in-range {
  background-color: rgba(158, 109, 224, 0.1);
}

.daterangepicker td.active, .daterangepicker td.active:hover {
  background-color: #9e6de0;
}

/*===== INPUTS GROUP CHART =====*/
.input-group-chat {
  padding: 1.25rem;
}
.input-group-chat .emoticon-icon {
  border: 1px solid #e5e9f2;
  border-right-color: transparent;
  line-height: 45px;
  padding-left: 0.625rem;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
  font-size: 1.3125rem;
}
.input-group-chat .emoticon-icon::after {
  display: none;
}
.input-group-chat .form-control {
  border-color: #e5e9f2;
  border-left-color: transparent;
  height: 3.125rem;
}
.input-group-chat .form-control:focus {
  box-shadow: none;
}
.input-group-chat .dropdown-menu.show {
  top: auto !important;
  bottom: 69px;
  left: 20px;
}

/*===== ICONS =====*/
.icon-sm {
  font-size: 2rem;
  line-height: 2rem;
}

.icon-md {
  width: 70px;
  height: 70px;
  text-align: center;
  font-size: 1.5rem;
}
.icon-md i {
  line-height: 70px;
  color: #ffffff;
}

/*===== VECTOR MAP =====*/
/* US Vector Map */
#us-vector-map-marker {
  height: 260px;
}

.vec-map-wrapper {
  height: 180px;
}
@media (min-width: 768px) {
  .vec-map-wrapper {
    height: 225px;
  }
}
@media (min-width: 992px) {
  .vec-map-wrapper {
    height: 325px;
  }
}

/* Vector Map Zoom In And Zoom Out Button */
.jvectormap-zoomin,
.jvectormap-zoomout {
  background-color: #9e6de0;
}

.jvectormap-marker.jvectormap-element {
  fill: #000;
  stroke: #000;
}

.map-container {
  height: 400px;
  width: 100%;
  margin: 0;
  padding: 0;
}

.info-title {
  color: #31343d;
  padding: 0.31rem;
}

/* ===== DROPDOWN ===== */
/* Dropdown Toggle icon mini-burger */
.icon-burger-mini {
  font-size: 1.5rem;
}
.icon-burger-mini:after {
  display: none;
}
.icon-burger-mini:before {
  font-family: "Material Design Icons";
  content: "\f1d9";
  color: #b6bdca;
}

/* Card Header Dropdown */
.card-header .dropdown .dropdown-toggle {
  color: #8a909d;
}

/* Chat Dropdown Status */
.dropdown-chat-state .dropdown-toggle {
  color: #ffffff;
}
.dropdown-chat-state .dropdown-toggle::after {
  display: none;
}
.dropdown-chat-state .btn {
  box-shadow: none;
  color: #ffffff !important;
  padding: 0;
}
.dropdown-chat-state .btn i {
  font-size: 1.25rem;
}
.dropdown-chat-state .btn.btn-rounded-circle {
  width: 36px;
  height: 36px;
  line-height: 1;
  padding: 0;
}
.dropdown-chat-state .dropdown-menu {
  width: 250px;
  min-height: 0px;
  max-height: 170px;
  overflow-y: scroll;
  top: 40px;
}
.dropdown-chat-state .dropdown-menu::-webkit-scrollbar {
  width: 4px;
}
.dropdown-chat-state .dropdown-menu::-webkit-scrollbar-track {
  background: #ffffff;
}
.dropdown-chat-state .dropdown-menu::-webkit-scrollbar-thumb {
  background: rgba(153, 153, 153, 0.4);
  border-radius: 30px;
}
.dropdown-chat-state .user-link {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
  color: #8a909d;
}
.dropdown-chat-state .user-link img {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  margin-right: 0.5rem;
}
.dropdown-chat-state .user-link .username {
  margin-right: auto;
  text-transform: capitalize;
}
.dropdown-chat-state .user-link .state {
  font-size: 12px;
  font-style: italic;
}
.dropdown-chat-state .user-link .state.active i {
  font-size: 1.375rem;
  color: #9e6de0;
}

/* Chat Dropdown */
.chat-dropdown .dropdown-menu {
  width: 100%;
  overflow-y: unset;
  max-height: unset;
}

/* Dropdown Menu Search */
.dropdown-menu-search {
  border-bottom-left-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  width: 100% !important;
  margin-top: -1px !important;
}
.dropdown-menu-search .nav-item.active {
  background-color: #9e6de0;
}
.dropdown-menu-search .nav-item.active .nav-link {
  color: #ffffff;
}
.dropdown-menu-search .nav-item.active:last-child {
  border-bottom-left-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}
.dropdown-menu-search .nav-link {
  padding: 0.5rem 1.25rem !important;
}

/*===== ALERT =====*/
.alert.alert-icon {
  padding-left: 4.375rem;
  border: none;
}
.alert.alert-icon i {
  position: absolute;
  top: 0;
  left: 0;
  width: 50px;
  height: 100%;
  text-align: center;
  line-height: 50px;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: rgba(0, 0, 0, 0.1);
  font-size: 1.25rem;
}
.alert.alert-outlined {
  background-color: transparent;
  color: #31343d;
}

/*===== BADGE =====*/
.badge {
  text-transform: uppercase;
}
.badge.badge-square {
  border-radius: 0px;
}
.badge.badge-outline-primary {
  border: 1px solid #9e6de0;
  color: #9e6de0;
}
.badge.badge-outline-secondary {
  border: 1px solid #fd5190;
  color: #fd5190;
}
.badge.badge-outline-success {
  border: 1px solid #0acb8e;
  color: #0acb8e;
}
.badge.badge-outline-danger {
  border: 1px solid #fe5461;
  color: #fe5461;
}
.badge.badge-outline-warning {
  border: 1px solid #fec400;
  color: #fec400;
}
.badge.badge-outline-info {
  border: 1px solid #04c7e0;
  color: #04c7e0;
}
.badge.badge-outline-light {
  border: 1px solid #f0f1f5;
  color: #f0f1f5;
}
.badge.badge-outline-dark {
  border: 1px solid #31343d;
  color: #31343d;
}

/*===== BREADCRUMB  =====*/
.breadcrumb {
  border: 1px solid #e5e9f2;
}
.breadcrumb.breadcrumb-inverse {
  border: 1px solid #9e6de0;
  background-color: rgba(158, 109, 224, 0.2);
}
.breadcrumb.breadcrumb-inverse .breadcrumb-item,
.breadcrumb.breadcrumb-inverse .breadcrumb-item.active {
  color: #9e6de0;
}
.breadcrumb.breadcrumb-inverse .breadcrumb-item::before {
  color: #9e6de0;
}
.breadcrumb.breadcrumb-primary {
  border-color: #9e6de0;
  background-color: #9e6de0;
}
.breadcrumb.breadcrumb-primary .breadcrumb-item, .breadcrumb.breadcrumb-primary .breadcrumb-item a {
  color: #ffffff;
}
.breadcrumb.breadcrumb-primary .breadcrumb-item:before {
  color: #ffffff;
}
.breadcrumb.breadcrumb-secondary {
  border-color: #fd5190;
  background-color: #fd5190;
}
.breadcrumb.breadcrumb-secondary .breadcrumb-item, .breadcrumb.breadcrumb-secondary .breadcrumb-item a {
  color: #ffffff;
}
.breadcrumb.breadcrumb-secondary .breadcrumb-item:before {
  color: #ffffff;
}
.breadcrumb.breadcrumb-success {
  border-color: #0acb8e;
  background-color: #0acb8e;
}
.breadcrumb.breadcrumb-success .breadcrumb-item, .breadcrumb.breadcrumb-success .breadcrumb-item a {
  color: #ffffff;
}
.breadcrumb.breadcrumb-success .breadcrumb-item:before {
  color: #ffffff;
}
.breadcrumb.breadcrumb-danger {
  border-color: #fe5461;
  background-color: #fe5461;
}
.breadcrumb.breadcrumb-danger .breadcrumb-item, .breadcrumb.breadcrumb-danger .breadcrumb-item a {
  color: #ffffff;
}
.breadcrumb.breadcrumb-danger .breadcrumb-item:before {
  color: #ffffff;
}
.breadcrumb.breadcrumb-warning {
  border-color: #fec400;
  background-color: #fec400;
}
.breadcrumb.breadcrumb-warning .breadcrumb-item, .breadcrumb.breadcrumb-warning .breadcrumb-item a {
  color: #ffffff;
}
.breadcrumb.breadcrumb-warning .breadcrumb-item:before {
  color: #ffffff;
}
.breadcrumb.breadcrumb-info {
  border-color: #04c7e0;
  background-color: #04c7e0;
}
.breadcrumb.breadcrumb-info .breadcrumb-item, .breadcrumb.breadcrumb-info .breadcrumb-item a {
  color: #ffffff;
}
.breadcrumb.breadcrumb-info .breadcrumb-item:before {
  color: #ffffff;
}
.breadcrumb.breadcrumb-light {
  border-color: #f0f1f5;
  background-color: #f0f1f5;
}
.breadcrumb.breadcrumb-light .breadcrumb-item, .breadcrumb.breadcrumb-light .breadcrumb-item a {
  color: #31343d;
}
.breadcrumb.breadcrumb-light .breadcrumb-item:before {
  color: #31343d;
}
.breadcrumb.breadcrumb-dark {
  border-color: #31343d;
  background-color: #31343d;
}
.breadcrumb.breadcrumb-dark .breadcrumb-item, .breadcrumb.breadcrumb-dark .breadcrumb-item a {
  color: #ffffff;
}
.breadcrumb.breadcrumb-dark .breadcrumb-item:before {
  color: #ffffff;
}

.breadcrumb-item + .breadcrumb-item::before {
  content: "\f142";
  font-family: "Material Design Icons";
}

/*===== EMAIL =====*/
.email-wrapper {
  margin-bottom: 2rem;
}

.email-options ul li {
  position: relative;
}
.email-options ul li a {
  color: #8a909d;
  font-weight: 500;
  display: block;
}
.email-options ul li a i {
  font-size: 1rem;
}
.email-options ul li a:hover {
  color: #31343d;
}
.email-options ul li a:hover > i {
  color: #9e6de0;
}
.email-options ul li.active a {
  color: #31343d;
}
.email-options ul li.active a > i {
  color: #9e6de0;
}
.email-options ul li span.badge {
  position: absolute;
  top: 0;
  right: 0;
  padding: 6px 12px;
  font-size: 13px;
  color: #9e6de0;
  border: 1px solid #e5e9f2;
  background-color: #ffffff;
  border-radius: 2rem;
}

.table.table-email tbody {
  cursor: pointer;
}
.table.table-email .mark-mail {
  padding-left: 1.25rem;
}
.table.table-email .mark-mail .control {
  margin-top: -5px;
}
.table.table-email .star i {
  font-size: 18px;
}
.table.table-email tr td {
  padding: 1.25rem 0.625rem;
  white-space: nowrap;
  vertical-align: middle;
}
@media (min-width: 992px) {
  .table.table-email tr td {
    white-space: normal;
  }
}
.table.table-email tr td .badge {
  margin-right: 0.625rem;
  text-transform: uppercase;
}
.table.table-email tr td .text-default {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 175px;
}
@media (min-width: 992px) {
  .table.table-email tr td .text-default {
    width: 250px;
  }
}
@media (min-width: 1200px) {
  .table.table-email tr td .text-default {
    width: 380px;
  }
}
@media (min-width: 1500px) {
  .table.table-email tr td .text-default {
    width: 650px;
  }
}
.table.table-email tr.unread {
  background: #f5f6fa;
}

/* Email Details Content */
.email-details-content {
  padding: 1rem;
}
@media (min-width: 768px) {
  .email-details-content {
    padding: 1.5rem;
  }
}

.email-details-content-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1.5rem;
}

.email-details-content-header-right {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}
.email-details-content-header-right .btn-group .btn {
  padding: 2px 16px;
  border: 1px solid #e5e9f2;
}
.email-details-content-header-right .dropdown .icon-burger-mini {
  padding: 0;
}

/* Email Right Column */
@media (min-width: 992px) {
  .email-right-column {
    border-left: 1px solid #e5e9f2;
  }
}
.email-right-column .email-right-header {
  margin-bottom: 1.25rem;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
}
@media (min-width: 768px) {
  .email-right-column .email-right-header {
    flex-direction: row;
    justify-content: space-between;
  }
}
.email-right-column .head-left-options {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 1rem;
}
.email-right-column .head-left-options .form-check {
  border: 1px solid #e5e9f2;
  border-radius: 2rem;
  padding-top: 0.59rem;
  padding-bottom: 0.59rem;
  padding-left: 2.5rem;
  padding-right: 1.25rem;
  margin-right: 0.5rem;
}
.email-right-column .head-left-options .btn {
  color: #31343d;
  border: 1px solid #e5e9f2;
  margin-right: 0.5rem;
  font-weight: 700;
  text-transform: capitalize;
}
.email-right-column .head-left-options .btn.dropdown-toggle {
  padding: 0.56rem 1.5rem;
}
.email-right-column .head-right-options .btn.btn-pill {
  font-size: 20px;
  padding: 0.3125rem 1rem;
}
.email-right-column .head-right-options .btn.btn-pill i {
  color: #31343d;
}

/* Email Details */
.email-details-header {
  border-bottom: 1px solid #e5e9f2;
  padding: 1rem;
}
@media (min-width: 768px) {
  .email-details-header {
    padding: 1.5rem;
  }
}

/* Email Compose */
.email-compose .form-control {
  padding: 12px 17px;
}
.email-compose .file-upload > input {
  display: none;
}
.email-compose .file-upload i {
  font-size: 16px;
  cursor: pointer;
}

/* Dropzon */
.dropzone .dz-default {
  padding: 1.25rem;
  min-height: 130px;
  display: flex;
  justify-content: center;
  align-items: center;
}

/*===== OWL CAROUSEL =====*/
.owl-carousel .single-item img {
  min-height: 180px;
}
@media (min-width: 992px) {
  .owl-carousel .single-item img {
    min-height: auto;
  }
}

.owl-theme {
  position: relative;
}
.owl-theme .owl-nav {
  font-size: 40px;
  color: #ffffff;
}
.owl-theme .owl-nav .owl-next,
.owl-theme .owl-nav .owl-prev {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.owl-theme .owl-nav .owl-next:hover,
.owl-theme .owl-nav .owl-prev:hover {
  background-color: rgba(0, 0, 0, 0.5) !important;
}
.owl-theme .owl-nav .owl-next {
  right: 0;
}
.owl-theme .owl-nav .owl-prev {
  left: 0;
}
.owl-theme .owl-dots {
  position: absolute;
  bottom: 5px;
  left: 50%;
  transform: translateX(-50%);
}
@media (min-width: 1200px) {
  .owl-theme .owl-dots {
    bottom: 20px;
  }
}
.owl-theme .owl-dots .owl-dot span {
  width: 25px;
  height: 3px;
  border-radius: 0px;
  background-color: rgba(255, 255, 255, 0.6);
}
@media (min-width: 768px) {
  .owl-theme .owl-dots .owl-dot span {
    width: 35px;
    height: 3px;
  }
}
.owl-theme .owl-dots .owl-dot.active span {
  background-color: #ffffff;
}
.owl-theme.carousel-user .owl-nav {
  color: #8a909d;
}
.owl-theme.carousel-user .owl-nav .owl-next,
.owl-theme.carousel-user .owl-nav .owl-prev {
  top: 40%;
  transform: translateY(-40%);
}
@media (min-width: 1200px) {
  .owl-theme.carousel-user .owl-nav .owl-prev {
    left: -100px;
  }
}
@media (min-width: 1200px) {
  .owl-theme.carousel-user .owl-nav .owl-next {
    right: -100px;
  }
}
.owl-theme.carousel-user .owl-item img {
  width: 210px;
  margin: 0 auto;
}
@media (min-width: 768px) {
  .owl-theme.carousel-user .owl-item img {
    width: 150px;
  }
}
@media (min-width: 1200px) {
  .owl-theme.carousel-user .owl-item img {
    width: 210px;
  }
}

/* Carousel Caption */
.carousel-caption {
  position: absolute;
  top: 35%;
  transform: translateY(-40%);
  right: 15%;
  bottom: 50px;
  left: 15%;
  z-index: 10;
  color: #ffffff;
  text-align: center;
}
@media (min-width: 992px) {
  .carousel-caption {
    top: 50%;
    transform: translateY(-50%);
  }
}

/* Carousel Testimonial */
.carousel-testimonial .owl-item img {
  width: 100px;
  margin: 0 auto;
}

/*===== LIST GROUP ITEM =====*/
.list-group-item {
  color: #31343d;
}
.list-group-item p {
  font-size: 0.8125rem;
  color: #8a909d;
}
.list-group-item .media-body {
  padding-right: 1.5rem;
}

.list-underline {
  display: flex;
  flex-direction: column;
}
.list-underline .list-item {
  border-bottom: 1px solid #e5e9f2;
  display: flex;
  justify-content: space-between;
  padding-top: 0.75rem;
  padding-bottom: 1.25rem;
  color: #31343d;
}

/*===== PAGINATION =====*/
.pagination .page-link {
  color: #8a909d;
  font-size: 0.75rem;
  padding: 8px 12px;
}
@media (min-width: 992px) {
  .pagination .page-link {
    padding: 1rem 1.3125rem;
    font-size: 0.94rem;
  }
}
.pagination .page-link .mdi::before {
  line-height: 1;
}

.pagination-flat .page-item .page-link {
  border: 0px;
}

.pagination-flat-rounded .page-item .page-link {
  border-radius: 50%;
  margin-right: 0.25rem;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 23px;
}
@media (min-width: 992px) {
  .pagination-flat-rounded .page-item .page-link {
    width: 50px;
    height: 50px;
    line-height: 18px;
  }
}

.pagination-seperated .page-item .page-link {
  margin: 0 0.31rem;
  border-radius: 0;
}
.pagination-seperated .page-item:last-child .page-link {
  margin-right: 0;
}
.pagination-seperated .page-item:first-child .page-link {
  margin-left: 0;
}

.pagination-seperated-rounded .page-item .page-link {
  border-radius: 50%;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 23px;
}
@media (min-width: 992px) {
  .pagination-seperated-rounded .page-item .page-link {
    width: 50px;
    height: 50px;
    line-height: 18px;
  }
}
@media (min-width: 992px) {
  .pagination-seperated-rounded .page-item:first-child .page-link, .pagination-seperated-rounded .page-item:last-child .page-link {
    border-radius: 6.25rem;
    width: auto;
    height: auto;
  }
}

.border-rounded .page-item:last-child .page-link {
  border-top-right-radius: 6.25rem;
  border-bottom-right-radius: 6.25rem;
}
.border-rounded .page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 6.25rem;
  border-bottom-left-radius: 6.25rem;
}

/*===== POPOVER =====*/
.popover-header {
  font-size: 1.125rem;
}

/*===== PROGRESS BAR =====*/
.progress-sm {
  height: 6px;
}

.progress-md {
  height: 10px;
}

.progress-white {
  background-color: rgba(49, 52, 61, 0.1);
}

#nprogress .bar {
  background: #9e6de0 !important;
}

/*===== CIRCLE PROGRESS =====*/
.circle {
  position: relative;
  text-align: center;
}
.circle .circle-content {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  transform: translate(-50%, -50%);
}
.circle .circle-content h6, .circle .circle-content strong {
  font-size: 12px;
}
.circle.circle-lg h2 {
  font-size: 45px;
  font-family: "Roboto", sans-serif;
}

/*===== SPINKITS =====*/
/* Rotating Plane */
.sk-rotating-plane {
  width: 40px;
  height: 40px;
  background-color: #333;
  animation: sk-rotateplane 1.2s infinite ease-in-out;
}
@keyframes sk-rotateplane {
  0% {
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
  }
  50% {
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
  }
  100% {
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}
/* double-bounce */
.sk-double-bounce {
  width: 40px;
  height: 40px;
  position: relative;
}

.double-bounce1, .double-bounce2 {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #333;
  opacity: 0.6;
  position: absolute;
  top: 0;
  left: 0;
  animation: sk-bounce 2s infinite ease-in-out;
}

.double-bounce2 {
  animation-delay: -1s;
}
@keyframes sk-bounce {
  0%, 100% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  50% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}
/* Wave */
.sk-wave {
  width: 50px;
  height: 40px;
  text-align: center;
  font-size: 0.625rem;
}

.sk-wave > div {
  background-color: #333;
  height: 100%;
  width: 6px;
  display: inline-block;
  animation: sk-stretchdelay 1.2s infinite ease-in-out;
}

.sk-wave .rect2 {
  animation-delay: -1.1s;
}

.sk-wave .rect3 {
  animation-delay: -1s;
}

.sk-wave .rect4 {
  animation-delay: -0.9s;
}

.sk-wave .rect5 {
  animation-delay: -0.8s;
}
@keyframes sk-stretchdelay {
  0%, 40%, 100% {
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }
  20% {
    transform: scaleY(1);
    -webkit-transform: scaleY(1);
  }
}
/* Wonderting Cube */
.sk-wonder-cube {
  width: 40px;
  height: 40px;
  position: relative;
}

.cube1, .cube2 {
  background-color: #333;
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: 0;
  animation: sk-cubemove 1.8s infinite ease-in-out;
}

.cube2 {
  animation-delay: -0.9s;
}
@keyframes sk-cubemove {
  25% {
    transform: translateX(42px) rotate(-90deg) scale(0.5);
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
  }
  50% {
    transform: translateX(42px) translateY(42px) rotate(-179deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
  }
  50.1% {
    transform: translateX(42px) translateY(42px) rotate(-180deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
  }
  75% {
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
  }
  100% {
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}
/* Pulse */
.sk-pulse {
  width: 60px;
  height: 60px;
  background-color: #333;
  border-radius: 100%;
  animation: sk-scaleout 1s infinite ease-in-out;
}
@keyframes sk-scaleout {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
/* Chasing dots */
.sk-chasing-dots {
  width: 40px;
  height: 40px;
  position: relative;
  text-align: center;
  animation: sk-rotate 2s infinite linear;
}

.dot1, .dot2 {
  width: 60%;
  height: 60%;
  display: inline-block;
  position: absolute;
  top: 0;
  background-color: #333;
  border-radius: 100%;
  animation: sk-bounce 2s infinite ease-in-out;
}

.dot2 {
  top: auto;
  bottom: 0;
  animation-delay: -1s;
}
@keyframes sk-rotate {
  100% {
    transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
  }
}
@keyframes sk-bounce {
  0%, 100% {
    transform: scale(0);
    -webkit-transform: scale(0);
  }
  50% {
    transform: scale(1);
    -webkit-transform: scale(1);
  }
}
/* Three bounce */
.sk-three-bounce {
  width: 70px;
  height: 40px;
  text-align: center;
}

.sk-three-bounce > div {
  width: 18px;
  height: 18px;
  background-color: #333;
  border-radius: 100%;
  display: inline-block;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.sk-three-bounce .bounce1 {
  animation-delay: -0.32s;
}

.sk-three-bounce .bounce2 {
  animation-delay: -0.16s;
}
@keyframes sk-bouncedelay {
  0%, 80%, 100% {
    transform: scale(0);
  }
  40% {
    transform: scale(1);
  }
}
/* Circle */
.sk-circle {
  width: 40px;
  height: 40px;
  position: relative;
}

.sk-circle .sk-child {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}

.sk-circle .sk-child:before {
  content: "";
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #333;
  border-radius: 100%;
  animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
}

.sk-circle .sk-circle2 {
  transform: rotate(30deg);
}

.sk-circle .sk-circle3 {
  transform: rotate(60deg);
}

.sk-circle .sk-circle4 {
  transform: rotate(90deg);
}

.sk-circle .sk-circle5 {
  transform: rotate(120deg);
}

.sk-circle .sk-circle6 {
  transform: rotate(150deg);
}

.sk-circle .sk-circle7 {
  transform: rotate(180deg);
}

.sk-circle .sk-circle8 {
  transform: rotate(210deg);
}

.sk-circle .sk-circle9 {
  transform: rotate(240deg);
}

.sk-circle .sk-circle10 {
  transform: rotate(270deg);
}

.sk-circle .sk-circle11 {
  transform: rotate(300deg);
}

.sk-circle .sk-circle12 {
  transform: rotate(330deg);
}

.sk-circle .sk-circle2:before {
  animation-delay: -1.1s;
}

.sk-circle .sk-circle3:before {
  animation-delay: -1s;
}

.sk-circle .sk-circle4:before {
  animation-delay: -0.9s;
}

.sk-circle .sk-circle5:before {
  animation-delay: -0.8s;
}

.sk-circle .sk-circle6:before {
  animation-delay: -0.7s;
}

.sk-circle .sk-circle7:before {
  animation-delay: -0.6s;
}

.sk-circle .sk-circle8:before {
  animation-delay: -0.5s;
}

.sk-circle .sk-circle9:before {
  animation-delay: -0.4s;
}

.sk-circle .sk-circle10:before {
  animation-delay: -0.3s;
}

.sk-circle .sk-circle11:before {
  animation-delay: -0.2s;
}

.sk-circle .sk-circle12:before {
  animation-delay: -0.1s;
}
@keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    transform: scale(0);
  }
  40% {
    transform: scale(1);
  }
}
/* Cube Grid */
.sk-cube-grid {
  width: 40px;
  height: 40px;
}

.sk-cube-grid .sk-cube {
  width: 33%;
  height: 33%;
  background-color: #333;
  float: left;
  animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
}

.sk-cube-grid .sk-cube1 {
  animation-delay: 0.2s;
}

.sk-cube-grid .sk-cube2 {
  animation-delay: 0.3s;
}

.sk-cube-grid .sk-cube3 {
  animation-delay: 0.4s;
}

.sk-cube-grid .sk-cube4 {
  animation-delay: 0.1s;
}

.sk-cube-grid .sk-cube5 {
  animation-delay: 0.2s;
}

.sk-cube-grid .sk-cube6 {
  animation-delay: 0.3s;
}

.sk-cube-grid .sk-cube7 {
  animation-delay: 0s;
}

.sk-cube-grid .sk-cube8 {
  animation-delay: 0.1s;
}

.sk-cube-grid .sk-cube9 {
  animation-delay: 0.2s;
}
@keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    transform: scale3D(1, 1, 1);
  }
  35% {
    transform: scale3D(0, 0, 1);
  }
}
/* Fading Circle */
.sk-fading-circle {
  width: 40px;
  height: 40px;
  position: relative;
}

.sk-fading-circle .sk-circle {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}

.sk-fading-circle .sk-circle:before {
  content: "";
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #333;
  border-radius: 100%;
  animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
}

.sk-fading-circle .sk-circle2 {
  transform: rotate(30deg);
}

.sk-fading-circle .sk-circle3 {
  transform: rotate(60deg);
}

.sk-fading-circle .sk-circle4 {
  transform: rotate(90deg);
}

.sk-fading-circle .sk-circle5 {
  transform: rotate(120deg);
}

.sk-fading-circle .sk-circle6 {
  transform: rotate(150deg);
}

.sk-fading-circle .sk-circle7 {
  transform: rotate(180deg);
}

.sk-fading-circle .sk-circle8 {
  transform: rotate(210deg);
}

.sk-fading-circle .sk-circle9 {
  transform: rotate(240deg);
}

.sk-fading-circle .sk-circle10 {
  transform: rotate(270deg);
}

.sk-fading-circle .sk-circle11 {
  transform: rotate(300deg);
}

.sk-fading-circle .sk-circle12 {
  transform: rotate(330deg);
}

.sk-fading-circle .sk-circle2:before {
  animation-delay: -1.1s;
}

.sk-fading-circle .sk-circle3:before {
  animation-delay: -1s;
}

.sk-fading-circle .sk-circle4:before {
  animation-delay: -0.9s;
}

.sk-fading-circle .sk-circle5:before {
  animation-delay: -0.8s;
}

.sk-fading-circle .sk-circle6:before {
  animation-delay: -0.7s;
}

.sk-fading-circle .sk-circle7:before {
  animation-delay: -0.6s;
}

.sk-fading-circle .sk-circle8:before {
  animation-delay: -0.5s;
}

.sk-fading-circle .sk-circle9:before {
  animation-delay: -0.4s;
}

.sk-fading-circle .sk-circle10:before {
  animation-delay: -0.3s;
}

.sk-fading-circle .sk-circle11:before {
  animation-delay: -0.2s;
}

.sk-fading-circle .sk-circle12:before {
  animation-delay: -0.1s;
}
@keyframes sk-circleFadeDelay {
  0%, 39%, 100% {
    opacity: 0;
  }
  40% {
    opacity: 1;
  }
}
/* Folding Cube */
.sk-folding-cube {
  width: 40px;
  height: 40px;
  position: relative;
  transform: rotateZ(45deg);
}

.sk-folding-cube .sk-cube {
  float: left;
  width: 50%;
  height: 50%;
  position: relative;
  transform: scale(1.1);
}

.sk-folding-cube .sk-cube:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #333;
  animation: sk-foldCubeAngle 2.4s infinite linear both;
  transform-origin: 100% 100%;
}

.sk-folding-cube .sk-cube2 {
  transform: scale(1.1) rotateZ(90deg);
}

.sk-folding-cube .sk-cube3 {
  transform: scale(1.1) rotateZ(180deg);
}

.sk-folding-cube .sk-cube4 {
  transform: scale(1.1) rotateZ(270deg);
}

.sk-folding-cube .sk-cube2:before {
  animation-delay: 0.3s;
}

.sk-folding-cube .sk-cube3:before {
  animation-delay: 0.6s;
}

.sk-folding-cube .sk-cube4:before {
  animation-delay: 0.9s;
}
@keyframes sk-foldCubeAngle {
  0%, 10% {
    transform: perspective(140px) rotateX(-180deg);
    opacity: 0;
  }
  25%, 75% {
    transform: perspective(140px) rotateX(0deg);
    opacity: 1;
  }
  90%, 100% {
    transform: perspective(140px) rotateY(180deg);
    opacity: 0;
  }
}
/*===== SWITCHES =====*/
input[type=checkbox],
input[type=radio] {
  box-sizing: border-box;
  padding: 0;
}

.switch {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 50px;
  height: 24px;
  background-color: transparent;
  margin-bottom: 0;
  cursor: pointer;
}
.switch .switch-input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.switch .switch-label {
  position: relative;
  display: block;
  height: inherit;
  font-size: 0.625rem;
  font-weight: 600;
  text-transform: uppercase;
  background-color: #f0f1f5;
  border: 1px solid #e5e9f2;
  border-radius: 0.25rem;
  transition: opacity background-color 0.3s 0.3s ease-out;
}
.switch .switch-handle {
  position: absolute;
  top: 3px;
  left: 3px;
  width: 18px;
  height: 18px;
  background: #ffffff;
  border: 1px solid #ffffff;
  border-radius: 1px;
  transition: left 0.3s ease-out;
}

.switch .switch-input:checked ~ .switch-handle {
  left: 28px;
}

/* Switch context properties */
.switch-primary > .switch-input:checked ~ .switch-label {
  background-color: #9e6de0 !important;
  border-color: #9e6de0;
}
.switch-primary > .switch-input:checked ~ .switch-handle {
  border-color: transparent;
}

.switch-secondary > .switch-input:checked ~ .switch-label {
  background-color: #fd5190 !important;
  border-color: #fd5190;
}
.switch-secondary > .switch-input:checked ~ .switch-handle {
  border-color: transparent;
}

.switch-success > .switch-input:checked ~ .switch-label {
  background-color: #0acb8e !important;
  border-color: #0acb8e;
}
.switch-success > .switch-input:checked ~ .switch-handle {
  border-color: transparent;
}

.switch-info > .switch-input:checked ~ .switch-label {
  background-color: #04c7e0 !important;
  border-color: #04c7e0;
}
.switch-info > .switch-input:checked ~ .switch-handle {
  border-color: transparent;
}

.switch-warning > .switch-input:checked ~ .switch-label {
  background-color: #fec400 !important;
  border-color: #fec400;
}
.switch-warning > .switch-input:checked ~ .switch-handle {
  border-color: transparent;
}

.switch-danger > .switch-input:checked ~ .switch-label {
  background-color: #fe5461 !important;
  border-color: #fe5461;
}
.switch-danger > .switch-input:checked ~ .switch-handle {
  border-color: transparent;
}

.switch-dark > .switch-input:checked ~ .switch-label {
  background-color: #31343d !important;
  border-color: #31343d;
}
.switch-dark > .switch-input:checked ~ .switch-handle {
  border-color: transparent;
}

/* Switch Pill */
.switch-pill .switch-handle,
.switch-pill .switch-label {
  border-radius: 50px !important;
}

/* Switch Outline */
.switch-outline-primary > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #9e6de0;
}
.switch-outline-primary .switch-input:checked ~ .switch-label:after {
  color: #9e6de0;
}
.switch-outline-primary > .switch-input:checked ~ .switch-handle {
  border-color: #9e6de0;
}

.switch-outline-secondary > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #fd5190;
}
.switch-outline-secondary .switch-input:checked ~ .switch-label:after {
  color: #fd5190;
}
.switch-outline-secondary > .switch-input:checked ~ .switch-handle {
  border-color: #fd5190;
}

.switch-outline-success > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #0acb8e;
}
.switch-outline-success .switch-input:checked ~ .switch-label:after {
  color: #0acb8e;
}
.switch-outline-success > .switch-input:checked ~ .switch-handle {
  border-color: #0acb8e;
}

.switch-outline-info > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #04c7e0;
}
.switch-outline-info .switch-input:checked ~ .switch-label:after {
  color: #04c7e0;
}
.switch-outline-info > .switch-input:checked ~ .switch-handle {
  border-color: #04c7e0;
}

.switch-outline-warning > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #fec400;
}
.switch-outline-warning > .switch-input:checked ~ .switch-label:after {
  color: #fec400;
}
.switch-outline-warning > .switch-input:checked ~ .switch-handle {
  border-color: #fec400;
}

.switch-outline-danger > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #fe5461;
}
.switch-outline-danger > .switch-input:checked ~ .switch-label:after {
  color: #fe5461;
}
.switch-outline-danger > .switch-input:checked ~ .switch-handle {
  border-color: #fe5461;
}

.switch-outline-dark > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #31343d;
}
.switch-outline-dark > .switch-input:checked ~ .switch-label:after {
  color: #31343d;
}
.switch-outline-dark > .switch-input:checked ~ .switch-handle {
  border-color: #31343d;
}

/* Switch Outline Alternative */
.switch-outline-alt-primary > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #9e6de0;
}
.switch-outline-alt-primary .switch-input:checked ~ .switch-label:after {
  color: #9e6de0;
}
.switch-outline-alt-primary > .switch-input:checked ~ .switch-handle {
  background-color: #9e6de0;
  border-color: #9e6de0;
}

.switch-outline-alt-secondary > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #fd5190;
}
.switch-outline-alt-secondary > .switch-input:checked ~ .switch-label:after {
  color: #fd5190;
}
.switch-outline-alt-secondary > .switch-input:checked ~ .switch-handle {
  background-color: #fd5190;
  border-color: #fd5190;
}

.switch-outline-alt-success > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #0acb8e;
}
.switch-outline-alt-success > .switch-input:checked ~ .switch-label:after {
  color: #0acb8e;
}
.switch-outline-alt-success > .switch-input:checked ~ .switch-handle {
  background-color: #0acb8e;
  border-color: #0acb8e;
}

.switch-outline-alt-info > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #04c7e0;
}
.switch-outline-alt-info > .switch-input:checked ~ .switch-label:after {
  color: #04c7e0;
}
.switch-outline-alt-info > .switch-input:checked ~ .switch-handle {
  background-color: #04c7e0;
  border-color: #04c7e0;
}

.switch-outline-alt-warning > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #fec400;
}
.switch-outline-alt-warning > .switch-input:checked ~ .switch-label:after {
  color: #fec400;
}
.switch-outline-alt-warning > .switch-input:checked ~ .switch-handle {
  background-color: #fec400;
  border-color: #fec400;
}

.switch-outline-alt-danger > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #fe5461;
}
.switch-outline-alt-danger > .switch-input:checked ~ .switch-label:after {
  color: #fe5461;
}
.switch-outline-alt-danger > .switch-input:checked ~ .switch-handle {
  background-color: #fe5461;
  border-color: #fe5461;
}

.switch-outline-alt-dark > .switch-input:checked ~ .switch-label {
  background-color: #ffffff !important;
  border-color: #31343d;
}
.switch-outline-alt-dark > .switch-input:checked ~ .switch-label:after {
  color: #31343d;
}
.switch-outline-alt-dark > .switch-input:checked ~ .switch-handle {
  background-color: #31343d;
  border-color: #31343d;
}

/* Switch With Text */
.switch.switch-text,
.switch.switch-icon {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 50px;
  height: 24px;
  background-color: transparent;
  cursor: pointer;
}
.switch.switch-text .switch-input,
.switch.switch-icon .switch-input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.switch.switch-text .switch-label,
.switch.switch-icon .switch-label {
  position: relative;
  display: block;
  height: inherit;
  font-size: 0.625rem;
  font-weight: 600;
  text-transform: uppercase;
  background-color: #ffffff;
  border: 1px solid #c2cfd6;
  border-radius: 2px;
  transition: opacity background 0.3s ease-out;
}
.switch.switch-text .switch-handle,
.switch.switch-icon .switch-handle {
  position: absolute;
  top: 3px;
  left: 3px;
  width: 18px;
  height: 18px;
  background: #fff;
  border: 1px solid #c2cfd6;
  border-radius: 0.06rem;
  transition: left 0.3s ease-out;
}

.switch.switch-text .switch-label:after,
.switch.switch-text .switch-label:before {
  position: absolute;
  top: 50%;
  width: 50%;
  margin-top: -0.31rem;
  line-height: 1;
  font-size: 0.625rem;
  font-weight: 400;
  font-family: "Karla", sans-serif;
  text-align: center;
  transition: inherit;
}
.switch.switch-text .switch-label:before {
  right: 1px;
  color: #c2cfd6;
  content: attr(data-off);
}
.switch.switch-text .switch-label:after {
  left: 1px;
  color: #fff;
  content: attr(data-on);
  opacity: 0;
}

.switch.switch-text .switch-input:checked ~ .switch-label:before {
  opacity: 0;
}

.switch.switch-text .switch-input:checked ~ .switch-label:after {
  opacity: 1;
}

.switch.switch-text .switch-input:checked ~ .switch-handle {
  left: 28px;
}

/* Switch With Icon */
.switch.switch-icon .switch-label:after,
.switch.switch-icon .switch-label:before {
  position: absolute;
  top: 50%;
  width: 50%;
  margin-top: -8px;
  line-height: 1;
  font-size: 1rem;
  font-weight: 400;
  font-family: "Material Design Icons";
  text-align: center;
  transition: inherit;
}
.switch.switch-icon .switch-label:before {
  right: 1px;
  color: #c2cfd6;
  content: "\f156";
}
.switch.switch-icon .switch-label:after {
  left: 1px;
  color: #fff;
  content: "\f12c";
  opacity: 0;
}

.switch.switch-icon .switch-input:checked ~ .switch-label:before {
  opacity: 0;
}

.switch.switch-icon .switch-input:checked ~ .switch-label:after {
  opacity: 1;
}

.switch.switch-icon .switch-input:checked ~ .switch-handle {
  left: 28px;
}

/*===== METERIAL DESING CODES =====*/
.mdi-show-code code {
  display: inline-block;
  vertical-align: middle;
  background: rgba(182, 189, 202, 0.2);
  padding: 3px 5px;
  border-radius: 3px;
  border: 1px solid #e5e9f2;
}
.mdi-show-code i.mdi {
  vertical-align: middle;
  border-radius: 4px;
  display: inline-block;
}
.mdi-show-code i.mdi.dark-demo {
  background: #333;
}
.mdi-show-code .note {
  color: #999;
  font-size: 14px;
  padding: 0 20px 5px 20px;
}

.icons {
  -moz-column-count: 1;
       column-count: 1;
  -moz-column-gap: 20px;
       column-gap: 20px;
}
@media (min-width: 992px) {
  .icons {
    -moz-column-count: 2;
         column-count: 2;
  }
}
@media (min-width: 1200px) {
  .icons {
    -moz-column-count: 3;
         column-count: 3;
  }
}
.icons div {
  line-height: 3em;
}
.icons div span {
  cursor: pointer;
  font-size: 14px;
  text-overflow: ellipsis;
  display: inline-block;
  max-width: calc(100% - 90px);
  overflow: hidden;
  vertical-align: middle;
  white-space: nowrap;
}

.icons div code:hover,
.icons div span:hover,
.icons div i:hover {
  color: #9e6de0;
}

.icons div code:hover {
  border-color: #9e6de0;
}

.material-icons code {
  color: #31343d;
}

.icons div code {
  border: 1px solid #e5e9f2;
  width: 65px;
  margin-left: 2px;
  margin-right: 4px;
  border-radius: 4px;
  display: inline-block;
  vertical-align: middle;
  text-align: center;
  line-height: 24px;
  cursor: pointer;
  background-color: rgba(182, 189, 202, 0.2);
}

.icons div i {
  display: inline-block;
  width: 32px;
  height: 24px;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  line-height: 24px;
}

.icons .mdi:before {
  font-size: 24px;
}

div.copied {
  position: fixed;
  top: 100px;
  left: 50%;
  width: 200px;
  text-align: center;
  color: #ffffff;
  background-color: #0acb8e;
  padding: 10px 15px;
  border-radius: 4px;
  margin-left: -100px;
}

/*===== TODO LIST ======*/
.todo-list .todo-single-item:last-child {
  margin-bottom: 0px;
}

.todo-single-item {
  margin-bottom: 2.19em;
  position: relative;
}
.todo-single-item > span {
  margin-left: 1.56rem;
  line-height: 1.2;
  position: relative;
  display: inline-block;
  color: #000;
}
.todo-single-item > span.badge {
  color: #ffffff;
  transition: all 0.3s ease-in;
  display: inline-table;
}
@media (prefers-reduced-motion: reduce) {
  .todo-single-item > span.badge {
    transition: none;
  }
}

.todo-single-item i.mdi {
  width: 18px;
  height: 18px;
  border: 1px solid #d4d5db;
  border-radius: 50%;
  margin-right: 0.38rem;
  position: relative;
  overflow: hidden;
  text-align: center;
  line-height: 1rem;
  position: absolute;
  left: 0;
  transition: all 0.3s ease-in;
}
@media (prefers-reduced-motion: reduce) {
  .todo-single-item i.mdi {
    transition: none;
  }
}
.todo-single-item i.mdi:hover {
  border-color: rgba(158, 109, 224, 0.5);
  background-color: rgba(158, 109, 224, 0.2);
  cursor: pointer;
}

.todo-input {
  display: none;
}
.todo-input input {
  margin-top: -0.31rem;
  border: none;
  font-size: 0.98rem;
  padding: 0.312rem 0.625rem;
}
.todo-input input:active, .todo-input input:focus {
  box-shadow: 0px 2px 8px rgba(49, 52, 61, 0.2);
}

.todo-single-item.finished > span {
  color: #8a909d;
  text-decoration: line-through;
}
.todo-single-item.finished > span.badge {
  text-decoration: none;
  background-color: #cfd0d8;
  color: #8a909d;
}
.todo-single-item.finished i.mdi {
  background-color: #d4d5db;
  border-color: #d4d5db;
}
.todo-single-item.finished i.mdi:after {
  content: "\f12c";
  font-size: 0.75rem;
  color: #8a909d;
  font-family: "Material Design Icons";
}

/*===== TOASTS =====*/
.toast {
  box-shadow: none !important;
  opacity: 1 !important;
}
.toast.toast-info {
  background-color: #04c7e0;
}
.toast.toast-success {
  background-color: #0acb8e;
}
.toast.toast-warning {
  background-color: #fec400;
}
.toast.toast-error {
  background-color: #fe5461;
}
.toast:hover {
  box-shadow: none !important;
}

#toast-container {
  margin-top: 65px;
  right: 0;
  z-index: 999;
}
#toast-container .toast-success {
  background-color: #9e6de0;
  opacity: 1;
}

#toast-container > div {
  box-shadow: none;
}

#toast-container > div:hover {
  box-shadow: none;
}

/*===== QUILL EDITOR =====*/
.ql-toolbar.ql-snow {
  border-color: #e5e9f2;
  border-bottom: none;
  border-top-right-radius: 0.25rem;
  border-top-left-radius: 0.25rem;
}

.ql-container .ql-editor {
  min-height: 350px;
}
.ql-container.ql-snow {
  border-color: #e5e9f2;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.ql-toolbar.ql-snow {
  border: 1px solid #e5e9f2;
  box-sizing: border-box;
  padding: 7px 12px;
  border-radius: 4px 4px 0 0;
  border-bottom: 0;
}

.ql-container.ql-snow {
  border: 1px solid #e5e9f2;
  border-radius: 0 0 4px 4px;
  min-height: 300px;
  padding: 12px;
}

.ql-editor {
  padding: 10px 8px;
}

.ql-editor.ql-blank::before {
  color: #8a909d;
  content: attr(data-placeholder);
  font-style: normal;
  left: 20px;
  font-size: 15px;
  pointer-events: none;
  position: absolute;
  right: 15px;
}

.ql-toolbar.ql-snow .ql-formats {
  margin-right: 10px;
  border: 1px solid #e5e9f2;
  border-radius: 2px;
  margin-top: 5px;
  margin-bottom: 5px;
}

.ql-snow.ql-toolbar button:hover,
.ql-snow .ql-toolbar button:hover,
.ql-snow.ql-toolbar button:focus,
.ql-snow .ql-toolbar button:focus,
.ql-snow.ql-toolbar button.ql-active,
.ql-snow .ql-toolbar button.ql-active,
.ql-snow.ql-toolbar .ql-picker-label:hover,
.ql-snow .ql-toolbar .ql-picker-label:hover,
.ql-snow.ql-toolbar .ql-picker-label.ql-active,
.ql-snow .ql-toolbar .ql-picker-label.ql-active,
.ql-snow.ql-toolbar .ql-picker-item:hover,
.ql-snow .ql-toolbar .ql-picker-item:hover,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected {
  color: #9e6de0;
}

.ql-snow.ql-toolbar button:hover .ql-stroke,
.ql-snow .ql-toolbar button:hover .ql-stroke,
.ql-snow.ql-toolbar button:focus .ql-stroke,
.ql-snow .ql-toolbar button:focus .ql-stroke,
.ql-snow.ql-toolbar button.ql-active .ql-stroke,
.ql-snow .ql-toolbar button.ql-active .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke,
.ql-snow.ql-toolbar button:hover .ql-stroke-miter,
.ql-snow .ql-toolbar button:hover .ql-stroke-miter,
.ql-snow.ql-toolbar button:focus .ql-stroke-miter,
.ql-snow .ql-toolbar button:focus .ql-stroke-miter,
.ql-snow.ql-toolbar button.ql-active .ql-stroke-miter,
.ql-snow .ql-toolbar button.ql-active .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke-miter,
.ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter,
.ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke-miter {
  stroke: #9e6de0;
}

.ql-snow.ql-toolbar button:hover .ql-fill, .ql-snow .ql-toolbar button:hover .ql-fill, .ql-snow.ql-toolbar button:focus .ql-fill, .ql-snow .ql-toolbar button:focus .ql-fill, .ql-snow.ql-toolbar button.ql-active .ql-fill, .ql-snow .ql-toolbar button.ql-active .ql-fill, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-fill, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-fill, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-fill, .ql-snow.ql-toolbar .ql-picker-item:hover .ql-fill, .ql-snow .ql-toolbar .ql-picker-item:hover .ql-fill, .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-fill, .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-fill, .ql-snow.ql-toolbar button:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:hover .ql-stroke.ql-fill, .ql-snow.ql-toolbar button:focus .ql-stroke.ql-fill, .ql-snow .ql-toolbar button:focus .ql-stroke.ql-fill, .ql-snow.ql-toolbar button.ql-active .ql-stroke.ql-fill, .ql-snow .ql-toolbar button.ql-active .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-label:hover .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-label.ql-active .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-item:hover .ql-stroke.ql-fill, .ql-snow.ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill, .ql-snow .ql-toolbar .ql-picker-item.ql-selected .ql-stroke.ql-fill {
  fill: #9e6de0;
}

/* Modal Stock In side quill editor*/
.modal-stock .ql-container .ql-editor {
  min-height: 100%;
}
.modal-stock .ql-container.ql-snow {
  min-height: 150px;
}

/*===== PAGE 404 =====*/
.page-404 .error-title {
  font-size: 6rem;
  color: #31343d;
  font-weight: 700;
}
@media (min-width: 768px) {
  .page-404 .error-title {
    font-size: 8.75rem;
  }
}

/*===== COMMINGSOON =====*/
.comingsoon-wrapper {
  min-height: 100vh;
  align-items: center;
  justify-content: center;
}
.comingsoon-wrapper .app-brand {
  margin-bottom: 2rem;
}

.comingsoon-header h1 {
  text-transform: uppercase;
  margin-bottom: 0.325rem;
  font-size: 1.875rem;
}
@media (min-width: 768px) {
  .comingsoon-header h1 {
    font-size: 2.34rem;
  }
}

.syotimer__body {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 2rem;
  margin-bottom: 2rem;
}
@media (min-width: 768px) {
  .syotimer__body {
    margin-top: 3.75rem;
    margin-bottom: 3.75rem;
  }
}

.syotimer-cell {
  width: 70px;
  height: 80px;
  margin-right: 0.75rem;
  border: 1px solid #e5e9f2;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
}
@media (min-width: 768px) {
  .syotimer-cell {
    width: 120px;
    height: 150px;
    margin-right: 30px;
  }
}
.syotimer-cell:last-child {
  margin-right: 0;
}

.syotimer-cell__value {
  font-size: 2rem;
  color: #31343d;
}
@media (min-width: 768px) {
  .syotimer-cell__value {
    font-size: 3.5rem;
  }
}

.syotimer-cell__unit {
  display: none;
}

.form-subscript {
  position: relative;
  max-width: 440px;
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}
@media (min-width: 576px) {
  .form-subscript {
    margin-left: auto;
    margin-right: auto;
  }
}
.form-subscript .btn-search {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 16px;
  font-size: 1.5rem;
}

/*===== MODAL =====*/
.modal .modal-header .btn-close-icon,
.modal .modal-header .btn-edit-icon,
.modal .modal-header .btn-dots-icon {
  font-size: 1.125rem;
  padding: 0 5px;
  color: #8a909d;
}

/*===== MODAL STOCK =====*/
.modal-stock {
  z-index: 1060;
}
.modal-stock .modal-header .modal-title {
  font-size: 1.375rem;
}
.modal-stock .custom-file {
  height: 250px;
  position: relative;
  border: 1px solid #e5e9f2;
}
.modal-stock .custom-file .custom-file-input {
  height: 250px;
}
.modal-stock .custom-file .upload-image {
  position: absolute;
  top: 50%;
  left: 50%;
  widows: 100%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/*===== RTL =====*/
html[dir=rtl] .sidebar li > a .caret:before {
  content: "\f141";
}

/*===== FOOTER =====*/
.copyright {
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 1rem;
  padding-bottom: 1rem;
}
@media (min-width: 992px) {
  .copyright {
    padding-left: 1.875rem;
    padding-right: 1.875rem;
  }
}
.copyright p {
  font-weight: 500;
}
/*# sourceMappingURL=style.css.map */

</style>