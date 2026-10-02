# Extension Shortcuts (xExtension-ExtensionShortcuts)

A [FreshRSS](https://freshrss.org) user extension that puts the configuration page of every enabled extension one click away.

Opening an extension's settings normally takes three steps: **Settings → Extensions**, find the extension in the list, click its gear. This extension lists every **enabled** extension that has a configuration page directly in the configuration menu — at the end of the **Configuration** section of the settings sidebar, and in the gear drop-down menu of the header. The entry of the extension whose settings are open is highlighted.

- Entries are sorted by name (natural, case-insensitive) and update automatically when extensions are enabled, disabled, installed or removed.
- Only extensions with a `configure.phtml` are listed; this extension itself is not.
- No configuration, no data stored, no JavaScript or CSS: it only adds links through the `menu_configuration_entry` hook.

## Installation

1. Copy the `xExtension-ExtensionShortcuts` folder into your FreshRSS `extensions/` directory (the folder name must stay `xExtension-ExtensionShortcuts`).
2. **Settings → Extensions**: enable **Extension Shortcuts** (user extension, enable it for each user who wants the shortcuts).

## Compatibility

FreshRSS 1.28.0 or later (uses the `Minz_HookType` hook enum). Tested on FreshRSS 1.30.0 with PHP 8.4.

## License

[AGPL-3.0](LICENSE), same as FreshRSS itself.

---

## 中文说明

FreshRSS 用户扩展：在设置菜单里直接列出所有**已启用、并且有设置页**的扩展，点一下就能打开它的设置。

平时打开某个扩展的设置要三步：「设置 → 扩展」→ 在列表里找到它 → 点齿轮。启用本扩展后，这些扩展会出现在设置侧边栏「配置」一组的末尾，以及页面右上角齿轮下拉菜单里；当前打开的那个会高亮。按名称排序，启用、停用、安装、删除扩展后自动更新。本扩展没有设置项，不保存任何数据，也不加载任何脚本或样式。

安装：把 `xExtension-ExtensionShortcuts` 文件夹放进 FreshRSS 的 `extensions/` 目录（文件夹名不能改），然后在「设置 → 扩展」里启用。需要 FreshRSS 1.28.0 或更高版本。
