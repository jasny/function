<?php

declare(strict_types=1);

namespace Ipl;

// phpcs:disable -- Dirty hack, but must be a resource to be safe.
define('___IPL_FUNCTION_ARGUMENT_PLACEHOLDER', fopen('data://text/plain;base64,NDI=', 'r'));
fclose(___IPL_FUNCTION_ARGUMENT_PLACEHOLDER);
// phpcs:enable

const FUNCTION_ARGUMENT_PLACEHOLDER = ___IPL_FUNCTION_ARGUMENT_PLACEHOLDER;
