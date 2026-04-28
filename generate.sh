#!/usr/bin/env bash
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d "$SCRIPT_DIR/specs/sell_analytics_v1_oas3.yaml" \
  -c AnalyticsApiClient \
  -n 'EBay\AnalyticsAndReporting\Generated\Analytics' \
  -o "$SCRIPT_DIR/src/Generated/Analytics" \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
