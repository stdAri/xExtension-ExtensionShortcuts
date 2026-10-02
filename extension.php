<?php
declare(strict_types=1);

final class ExtensionShortcutsExtension extends Minz_Extension {

	#[\Override]
	public function init(): void {
		parent::init();
		$this->registerHook(Minz_HookType::MenuConfigurationEntry, [$this, 'menuEntries']);
	}

	public function menuEntries(): string {
		$names = [];
		foreach (Minz_ExtensionManager::listExtensions(true) as $ext) {
			if ($ext->isEnabled() && $ext->getName() !== $this->getName() && is_file($ext->getPath() . '/configure.phtml')) {
				$names[] = $ext->getName();
			}
		}
		natcasesort($names);

		$html = '';
		foreach ($names as $name) {
			$active = Minz_Request::controllerName() === 'extension' && Minz_Request::actionName() === 'configure'
				&& Minz_Request::paramString('e', true) === $name;
			$html .= '<li class="item' . ($active ? ' active' : '') . '"><a href="' . _url('extension', 'configure', 'e', $name) . '">'
				. htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</a></li>';
		}
		return $html;
	}
}
