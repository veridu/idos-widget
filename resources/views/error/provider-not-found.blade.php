<!DOCTYPE html>
<html>
<head>
	<title>Veridu - Process failed to start</title>
	<style media="screen">
		body,html {
		    background-color: white;
		    font-family: 'Helvetica Neue', Helvetica, sans-serif;
		    color: #555;
		    width: 100%;
		    height: 100%;
		    line-height: 1.3;
		    display: flex;
		    justify-content: center;
		    align-items: center;
		}

		.accent {
			color: #039be5;
		}

		#content {
			max-width: 500px;
			margin-top: -25px;
		}
		button {
		    padding: 10px 20px;
		    border: 0;
		    background-color: #f6f6f6;
		    color: #0EB1EE;
		    border-radius: 8px;
		    font-weight: 400;
		    cursor: pointer;
		    outline: 0;
		}
		button:hover {
			background-color: #f1f1f1;
		}
	</style>
</head>
<body>
	<div id="content">
	<div>
		{{-- <svg width="76" height="26" viewBox="0 0 76 26" xmlns="http://www.w3.org/2000/svg"><title>Group 6</title><g fill="#000" fill-rule="evenodd"><path d="M33.93 13.09c0-1.246.161-2.474.484-3.686a10.01 10.01 0 0 1 1.523-3.27 7.786 7.786 0 0 1 2.665-2.337c1.085-.588 2.377-.882 3.876-.882 1.5 0 2.792.294 3.877.882a7.786 7.786 0 0 1 2.665 2.337c.692.969 1.2 2.059 1.523 3.27a14.246 14.246 0 0 1 0 7.372 10.01 10.01 0 0 1-1.523 3.271 7.786 7.786 0 0 1-2.665 2.336c-1.085.589-2.377.883-3.877.883s-2.791-.294-3.876-.883a7.786 7.786 0 0 1-2.665-2.336 10.01 10.01 0 0 1-1.523-3.27 14.246 14.246 0 0 1-.484-3.687zm-3.288 0c0 1.685.248 3.306.744 4.863.496 1.558 1.24 2.936 2.232 4.136.992 1.2 2.227 2.152 3.704 2.855 1.476.704 3.195 1.056 5.156 1.056 1.962 0 3.68-.352 5.157-1.056 1.477-.703 2.712-1.655 3.704-2.855s1.736-2.578 2.232-4.136c.496-1.557.744-3.178.744-4.863 0-1.684-.248-3.305-.744-4.862-.496-1.558-1.24-2.937-2.232-4.136-.992-1.2-2.227-2.158-3.704-2.873C46.16.504 44.44.146 42.478.146c-1.96 0-3.68.358-5.156 1.073-1.477.715-2.712 1.673-3.704 2.873-.992 1.2-1.736 2.578-2.232 4.136a15.925 15.925 0 0 0-.744 4.862zm44.333-5.122c-.046-1.361-.306-2.532-.779-3.513a6.845 6.845 0 0 0-1.938-2.44c-.819-.646-1.77-1.12-2.855-1.42-1.085-.299-2.261-.449-3.53-.449-1.131 0-2.233.144-3.306.433a9.088 9.088 0 0 0-2.872 1.315 6.657 6.657 0 0 0-2.025 2.25c-.508.91-.761 1.99-.761 3.236 0 1.13.225 2.07.674 2.82.45.75 1.05 1.362 1.8 1.835.75.473 1.598.853 2.544 1.142.946.288 1.91.542 2.89.761.98.22 1.944.433 2.89.64.946.208 1.794.48 2.544.814.75.334 1.35.767 1.8 1.298.45.53.675 1.223.675 2.076 0 .9-.185 1.639-.554 2.215a4.03 4.03 0 0 1-1.454 1.368c-.6.334-1.275.57-2.025.71-.75.138-1.494.207-2.232.207-.923 0-1.823-.116-2.7-.346-.876-.231-1.644-.589-2.301-1.073a5.507 5.507 0 0 1-1.592-1.852c-.404-.75-.606-1.644-.606-2.682h-3.115c0 1.5.271 2.797.813 3.893a7.466 7.466 0 0 0 2.216 2.7c.934.704 2.018 1.229 3.253 1.575a14.49 14.49 0 0 0 3.928.519c1.13 0 2.267-.133 3.41-.398a9.866 9.866 0 0 0 3.097-1.28 7.264 7.264 0 0 0 2.267-2.285c.588-.934.883-2.06.883-3.374 0-1.223-.225-2.239-.675-3.046a6.013 6.013 0 0 0-1.8-2.008 9.532 9.532 0 0 0-2.544-1.263 34.505 34.505 0 0 0-2.89-.813c-.98-.23-1.944-.444-2.89-.64a15.133 15.133 0 0 1-2.544-.745c-.75-.3-1.35-.686-1.8-1.159-.45-.473-.674-1.09-.674-1.852 0-.807.155-1.482.467-2.024a3.634 3.634 0 0 1 1.246-1.298 5.422 5.422 0 0 1 1.782-.693c.67-.138 1.35-.207 2.042-.207 1.708 0 3.11.398 4.205 1.194 1.096.796 1.737 2.082 1.921 3.859h3.115zM.111 6.504h5.033V25.93H.111zM19.794 20.166c.748-1.028 1.123-2.363 1.123-3.998 0-2.29-.6-3.928-1.798-4.91-.735-.597-1.589-.896-2.561-.896-1.482 0-2.568.543-3.264 1.624-.69 1.082-1.04 2.424-1.04 4.027 0 1.727.354 3.11 1.057 4.144.705 1.038 1.773 1.555 3.212 1.555 1.432 0 2.525-.515 3.271-1.546m1.077-11.26V.025h5.033l.025 25.904h-4.823l-.025-3.275c-.839 1.11-1.594 1.919-2.516 2.423-.93.501-2.1.755-3.477.755-2.265 0-4.184-.884-5.73-2.654-1.549-1.768-2.327-4.037-2.327-6.805 0-3.194.759-5.708 2.282-7.54 1.524-1.829 3.583-2.745 6.134-2.745 1.172 0 2.24.248 3.153.746.911.498 1.642 1.187 2.271 2.07zM.111 2.86h16.357V.028H.11z"/></g></svg> --}}
		<svg width="78" height="22" viewBox="0 0 78 22" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Logo</title><defs><path id="a" d="M0 .022h77.929v21.439H0"/><path id="c" d="M0 .022h77.929v21.439H0z"/></defs><g fill="none" fill-rule="evenodd"><path fill="#00ADEE" d="M41.483 5.387h4.088V20.98h-4.088z"/><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path d="M57.469 16.704c.607-.851.912-1.957.912-3.312 0-1.897-.487-3.253-1.46-4.067a3.167 3.167 0 0 0-2.08-.742c-1.204 0-2.086.45-2.651 1.345-.561.897-.845 2.008-.845 3.336 0 1.43.288 2.576.859 3.433.572.86 1.44 1.288 2.608 1.288 1.163 0 2.051-.427 2.657-1.281m-.97-11.042c.74.413 1.334.983 1.845 1.715V.022h4.087V20.98h-3.917v-2.214c-.681.92-1.295 1.59-2.043 2.007-.755.415-1.707.626-2.824.626-1.84 0-3.398-.733-4.654-2.2-1.258-1.463-1.89-3.343-1.89-5.636 0-2.646.616-4.728 1.854-6.245 1.237-1.515 2.91-2.274 4.98-2.274.953 0 1.82.205 2.562.618" fill="#00ADEE" mask="url(#b)"/><mask id="d" fill="#fff"><use xlink:href="#c"/></mask><path fill="#00ADEE" mask="url(#d)" d="M41.483 2.37h13.284V.022H41.483z"/><path fill="#212121" mask="url(#d)" d="M11.252 5.387h4.42L9.988 20.98H5.645L0 5.387h4.623l3.279 11.434zM19.744 9.21c-.584.59-.947 1.375-1.099 2.38h7.092c-.074-1.005-.44-1.874-1.094-2.43-.658-.556-1.472-.836-2.44-.836-1.058 0-1.88.295-2.46.885m6.159-3.482c1.098.484 2.005 1.248 2.722 2.293.643.92 1.06 1.975 1.253 3.19.111.713.156 1.722.135 3.063H18.545c.064 1.51.613 2.66 1.645 3.285.63.388 1.388.59 2.273.59.936 0 1.697-.195 2.285-.67.318-.254.603-.69.846-1.025h4.203c-.11.838-.62 1.818-1.526 2.764-1.41 1.509-3.385 2.244-5.922 2.244-2.095 0-3.945-.646-5.547-1.92-1.602-1.27-2.403-3.343-2.403-6.21 0-2.684.723-4.745 2.169-6.178C18.015 5.72 19.89 5 22.197 5c1.372 0 2.608.242 3.705.726M39.732 5.535c.053.006.048.013.389.021v4.155c-.34-.03-.528-.049-.73-.057-.201-.01-.384-.015-.509-.015-1.656 0-2.796.531-3.365 1.591-.317.6-.505 1.518-.505 2.76v6.99h-4.088V5.387h3.917v3.215c.682-1.035 1.186-1.742 1.656-2.12.772-.635 1.789-.953 3.023-.953.076 0 .158.002.212.006M67.88 5.387v9.369c0 .882.124 1.545.335 1.992.374.787 1.117 1.18 2.21 1.18 1.396 0 2.341-.56 2.86-1.678.268-.607.386-1.409.386-2.404V5.387h4.258V20.98H73.84v-2.255c0 .046-.114.19-.266.427a2.856 2.856 0 0 1-.538.624c-.642.57-1.258.958-1.86 1.167-.598.208-1.3.312-2.107.312-2.323 0-3.926-.825-4.733-2.473-.45-.91-.714-2.252-.714-4.026V5.387h4.258z"/></g></svg>
	</div>

		<p>
			Process failed to start.
		</p>

		<p class="accent">
			{{ $message }}
		</p>

		<button onclick="window.close()">
			OK
		</button>
	</div>

	<script type="text/javascript">

	</script>
</body>
</html>